<?php

use App\Http\Controllers\KBController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PlanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SSLController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ContactController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HostingController::class, 'userHome'])->name('user.home');

Route::get('/terms-of-service', function () {
    return view('user.terms');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('user.privacy-policy');
})->name('privacy.policy');

Route::get('/sitemap', function () {
    return view('user.sitemap');
})->name('sitemap');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

// Hosting Routes
Route::prefix('hosting')->group(function () {
    Route::get('/', [HostingController::class, 'index'])->name('hosting.index');
    Route::get('/shared', [HostingController::class, 'shared'])->name('hosting.shared');
    Route::get('/wordpress', [HostingController::class, 'wordpress'])->name('hosting.wordpress');
    Route::get('/woo-commerce', [HostingController::class, 'woocommerce'])->name('hosting.woocommerce');
    Route::get('/cloud', [HostingController::class, 'cloud'])->name('hosting.cloud');
    Route::get('/vps', [HostingController::class, 'vps'])->name('hosting.vps');
    Route::get('/dedicated', [HostingController::class, 'dedicated'])->name('hosting.dedicated');
    Route::get('/nodejs', [HostingController::class, 'nodejs'])->name('hosting.nodejs');
    Route::get('/reseller', [HostingController::class, 'reseller'])->name('hosting.reseller');
    Route::get('/compare', [HostingController::class, 'compare'])->name('hosting.compare');
    Route::get('/checkout/{plan}', [HostingController::class, 'checkout'])->name('hosting.checkout');
    Route::post('/process', [HostingController::class, 'process'])->name('hosting.process');
});

Route::get('/knowledge-base', function () {
    return view('user.knowledge-base');
})->name('knowledge-base');

Route::get('/guides', function () {
    return view('user.guides');
})->name('guides');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BlogController::class, 'index'])->name('dashboard');
    Route::get('/get-plans-data', [PlanController::class, 'getPlansData'])->name('plans.getPlansData');
    
    // Blog Routes
    Route::prefix('blogs')->group(function () {
        Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
        Route::post('/', [BlogController::class, 'store'])->name('blogs.store');
        Route::get('/{slug}', [BlogController::class, 'show'])->name('blogs.show');
        Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
        Route::put('/{blog}', [BlogController::class, 'update'])->name('blogs.update');
        Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
        //Route::get('/getplansdata', [PlanController::class, 'getplansdata'])->name('plans.getplansdata');
    });
});

// get plans
Route::post('/getplansdata', [PlanController::class, 'getplansdata'])->name('plans.getplansdata');

// Replace your current articles route with:
Route::get('/articles', [BlogController::class, 'publicIndex'])->name('articles');

// Replace your current single-articles route with:
Route::get('/single-articles/{slug}', [BlogController::class, 'publicShow'])->name('single-articles');
Route::get('/knowledge-base', [KbController::class, 'publicIndex'])->name('knowledge-base');
Route::get('/knowledge-base/{slug}', [KbController::class, 'publicShow'])->name('single-kb');

Route::get('/domain-name', [DomainController::class, 'getDomainName'])->name('domain-name');
Route::post('/domain-search', [DomainController::class, 'searchDomain'])->name('domain.search');
Route::post('/domain-suggestions/next', [DomainController::class, 'popNextSuggestion'])->name('domain.suggestions.next');

Route::get('/refund-policy', function () {
    return view('user.refund-policy');
})->name('refund-policy');

Route::get('/ssl', [SSLController::class, 'ssl'])->name('ssl');
Route::get('/about-us', function () {
    return view('user.about-us');
})->name('about-us');

Route::get('/development', function () {
    return view('user.development');
})->name('development');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');

require __DIR__ . '/auth.php';
