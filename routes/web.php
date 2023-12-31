<?php

use App\Http\Controllers\Api\V1\User\ParlourBookingController as UserParlourBookingController;
use App\Http\Controllers\Frontend\ParlourBookingController;
use App\Http\Controllers\Frontend\SiteController;
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
Route::controller(SiteController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('find-parlour','findParlour')->name('find.parlour');
    Route::get('about','about')->name('about');
    Route::get('service','service')->name('service');
    Route::get('blog','blog')->name('blog');
    Route::get('contact','contact')->name('contact');
    Route::get('parlour-package','parlourPackage')->name('parlour.package');
    Route::post("contact-request",'contactRequest')->name("contact.request");
    Route::get('blog-details/{slug}','blogDetails')->name('blog.details');
    Route::get('blog-category/{slug}','blogCategory')->name('blog.category');
    Route::get('link/{slug}','link')->name('link');
});

Route::controller(SiteController::class)->name('frontend.')->group(function(){
    Route::get('search/parlour','searchParlour')->name('parlour.search');

    //parlour booking
    Route::controller(ParlourBookingController::class)->name('get.service.')->group(function(){
        Route::get('get-service/{slug}','getService')->name('index');
    });
});
//Parlour Booking
Route::controller(ParlourBookingController::class)->name('parlour.booking.')->group(function(){
    Route::post('store','store')->name('store');
    Route::get('preview/{slug}','preview')->name('preview');
    Route::post('confirm/{slug}','confirm')->name('confirm');
    Route::post('/booking/delete','deleteBooking')->name('delete');

    //payment methods routes
    //paypal
    Route::get('success/response/{gateway}','success')->name('payment.success');
    Route::get("cancel/response/{gateway}",'cancel')->name('payment.cancel');

    //stripe
    Route::get('stripe/payment/success/{trx}','stripePaymentSuccess')->name('stripe.payment.success');

    //flutterwave
    Route::get('/flutterwave/callback', 'flutterwaveCallback')->name('flutterwave.callback');

    //ssl commerce
    Route::post('sslcommerz/success','sllCommerzSuccess')->name('ssl.success');
    Route::post('sslcommerz/fail','sllCommerzFails')->name('ssl.fail');
    Route::post('sslcommerz/cancel','sllCommerzCancel')->name('ssl.cancel');

    //razor-pay
    Route::get('razor/callback', 'razorCallback')->name('razor.callback');

});

//ssl commerz api
Route::controller(UserParlourBookingController::class)->prefix('api-parlour-booking')->name('api.parlour.booking.')->group(function(){
    //sslcommerz
    Route::post('sslcommerz/success','sllCommerzSuccess')->name('ssl.success');
    Route::post('sslcommerz/fail','sllCommerzFails')->name('ssl.fail');
    Route::post('sslcommerz/cancel','sllCommerzCancel')->name('ssl.cancel'); 
});


