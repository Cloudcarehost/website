<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate inputs and require consent and recaptcha token
        $validated = $request->validate([
            'name'                    => 'required|string|max:255',
            'email'                   => 'required|email|max:255',
            'subject'                 => 'required|string|max:255',
            'message'                 => 'required|string|min:5',
            'consent'                 => 'accepted',
            'g-recaptcha-response'    => 'required|string',
        ]);

        // Verify reCAPTCHA server-side
        $token = $validated['g-recaptcha-response'] ?? $request->input('g-recaptcha-response');

        try {
            $resp = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret'   => config('services.recaptcha.secret'),
                'response' => $token,
                'remoteip' => $request->ip(),
            ]);
        } catch (\Throwable $e) {
            \Log::error('reCAPTCHA verify request failed: '.$e->getMessage());
            return response()->json(['success' => false, 'message' => 'reCAPTCHA service unreachable.'], 500);
        }

        $respJson = $resp->json();
        if (! ($respJson['success'] ?? false)) {
            $errors = $respJson['error-codes'] ?? [];
            \Log::warning('reCAPTCHA failed', ['resp' => $respJson]);
            return response()->json([
                'success' => false,
                'message' => 'reCAPTCHA verification failed. Please try again.',
                'errors'  => $errors
            ], 422);
        }

        // Build data to include in email
        $data = [
            'name'         => $validated['name'],
            'email'        => $validated['email'],
            'subject'      => $validated['subject'],
            'message'      => $validated['message'],
            'consent'      => true,
            'ip'           => $request->ip(),
            'user_agent'   => $request->header('User-Agent'),
            'submitted_at' => now()->toDateTimeString(),
        ];

        try {
            Mail::to('info@cloudcarehost.com')->send(new ContactMessage($data));

            return response()->json([
                'success' => true,
                'message' => 'Message sent successfully.'
            ]);
        } catch (\Throwable $e) {
            \Log::error('Contact mail failed: '.$e->getMessage(), [
                'exception'   => $e,
                'mail_config' => [
                    'host'       => config('mail.mailers.smtp.host') ?? 'not-set',
                    'port'       => config('mail.mailers.smtp.port') ?? 'not-set',
                    'encryption' => config('mail.mailers.smtp.encryption') ?? 'not-set',
                    'username'   => config('mail.mailers.smtp.username') ? 'SET' : 'EMPTY',
                ],
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Failed to send email. Debug: '.$e->getMessage()
            ], 500);
        }
    }
}

