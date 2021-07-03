<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\XraysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/privacy', function () {
    return Inertia::render('PrivacyPolicy');
})->name('privacy');

Route::get('/terms', function () {
    return Inertia::render('TermsOfService');
})->name('terms');

Route::get('/pricing', function () {
    return Inertia::render('Pricing');
})->name('pricing');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Portofolio');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/portofolio', function () {
    return Inertia::render('Portofolio');
})->name('portofolio');

Route::middleware(['auth:sanctum', 'verified'])->get('/xray', function () {
    return Inertia::render('Xray');
})->name('xray');

Route::middleware(['auth:sanctum', 'verified'])->put('/addImageToPortofolio', [XraysController::class, 'store'])->name('xray.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/getAllXrays', [XraysController::class, 'getAllXrays'])->name('getAllXrays');
Route::middleware(['auth:sanctum', 'verified'])->get('/getImage/{id}', [XraysController::class, 'getImage'])->name('getImage');
Route::middleware(['auth:sanctum', 'verified'])->post('/storeImageResult', [XraysController::class, 'storeImageResult'])->name('storeImageResult');
