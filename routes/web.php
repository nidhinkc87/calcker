<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GSTCalculatorController;
use App\Http\Controllers\VATCalculatorController;
use App\Http\Controllers\CorporationTaxCalculatorController;
use App\Http\Controllers\FurloughClaimCalculatorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return redirect('/free-gst-calculator');
});

Route::get('/free-gst-calculator', [GSTCalculatorController::class, 'index'])->name('gst.calculator');
Route::get('/free-vat-calculator', [VATCalculatorController::class, 'index'])->name('vat.calculator');
Route::get('/corporation-tax-calculator', [CorporationTaxCalculatorController::class, 'index'])->name('corporation.tax.calculator');
Route::get('/furlough-claim-calculator', [FurloughClaimCalculatorController::class, 'index'])->name('furlough.claim.calculator');

// Blog routes
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Legal pages
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('privacy.policy');

Route::get('/terms-of-service', function () {
    return view('legal.terms-of-service');
})->name('terms.service');

// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
