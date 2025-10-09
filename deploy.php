<?php
// deploy.php - token-based simple webhook

$token = 'cloudcare321'; // your secret token
$deployScript = '/home/cloudcarehost/tmp/deploy.sh';
$logFile = '/home/cloudcarehost/tmp/deploy.log';

// Verify token in URL
if (!isset($_GET['token']) || $_GET['token'] !== $token) {
    http_response_code(403);
    echo json_encode(['error' => 'Invalid token']);
    exit;
}

// Read raw POST body
$payload = file_get_contents('php://input');
if (!$payload) {
    http_response_code(400);
    echo json_encode(['error' => 'Empty payload']);
    exit;
}

// Decode JSON safely
$data = json_decode($payload, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid JSON payload', 'details' => json_last_error_msg()]);
    exit;
}

// Get branch info
$branch = basename($data['ref'] ?? '');
$pusher = $data['pusher']['name'] ?? 'unknown';
$commit = $data['head_commit']['id'] ?? '';
$commitMessage = $data['head_commit']['message'] ?? '';

// Log push details
file_put_contents(
    $logFile,
    "[" . date('Y-m-d H:i:s') . "] Push by: $pusher | Branch: $branch | Commit: $commit | Message: $commitMessage\n",
    FILE_APPEND
);

// Only deploy for main branch
if ($branch !== 'main') {
    file_put_contents(
        $logFile,
        "[" . date('Y-m-d H:i:s') . "] Skipping deploy for branch $branch\n",
        FILE_APPEND
    );
    echo json_encode(['status' => 'skipped', 'branch' => $branch]);
    exit;
}

// Check deploy script exists
if (!file_exists($deployScript)) {
    file_put_contents(
        $logFile,
        "[" . date('Y-m-d H:i:s') . "] Deploy script not found at $deployScript\n",
        FILE_APPEND
    );
    http_response_code(500);
    echo json_encode(['error' => 'Deploy script not found']);
    exit;
}

// Run deploy script
$output = [];
$status = null;
exec("/bin/bash $deployScript 2>&1", $output, $status);

// Log deployment output
file_put_contents(
    $logFile,
    "[" . date('Y-m-d H:i:s') . "] Deployment output:\n" . implode("\n", $output) . "\n",
    FILE_APPEND
);

// Return JSON response
echo json_encode([
    'status' => $status === 0 ? 'success' : 'failed',
    'branch' => $branch,
    'output' => $output
]);

