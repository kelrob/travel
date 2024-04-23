<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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


// Static pages
Route::view('/about', 'layouts.about')->name('about');
Route::view('/visa', 'layouts.visa')->name('visa');
Route::view('/flights', 'layouts.flights')->name('flights');
Route::view('/study', 'layouts.study')->name('study');
Route::view('/contact', 'layouts.contact')->name('contact');
Route::view('/activity-single', 'layouts.activity_single')->name('activity-single');
Route::view('/privacy-policy', 'layouts.privacy-policy')->name('privacy-policy');
Route::view('/terms-of-use', 'layouts.terms-of-use')->name('terms-of-use');
Route::view('/404', 'errors.404')->name('404');
Route::view('/receipts', 'layouts.receipt')->name('receipt');
Route::view('/visa-get-started', 'layouts.visa.get-started')->name('visa-get-started');
Route::view('/success', 'layouts.success')->name('success');
Route::view('/success-stories', 'layouts.testimonials')->name('success-stories');
Route::get('/destination-details/{id}/{slug}', [PublicController::class, 'showDestinationDetails'])->name('destination-info');

// Dynamic routes
Route::get('/', [PublicController::class, 'index'])->name('/');
Route::get('/tour', [PublicController::class, 'showOngoingTours'])->name('tour');
Route::get('/destinations', [PublicController::class, 'showOngoingTours'])->name('destinations');
Route::get('/destination/{id}/{slug}', [PublicController::class, 'showDestinationDetails'])->name('destination-details');
Route::get('/tour/{id}/{slug}', [PublicController::class, 'showTourDetails'])->name('tour-details');

// Payment routes
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/paystack/callback', [PaymentController::class, 'handleGatewayCallback'])->name('paymentCallback');

// Newsletter subscription route
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Services Requests
Route::post('/visa/submit/request', [PublicController::class, 'visaSubmitRequest'])->name('visa.submit.request');
Route::post('/flight/submit/request', [PublicController::class, 'flightSubmitRequest'])->name('flight.submit.request');
Route::post('/study/submit/request', [PublicController::class, 'studySubmitRequest'])->name('study.submit.request');
