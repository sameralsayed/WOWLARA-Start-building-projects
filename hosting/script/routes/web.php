<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialLoginController;
use App\Http\Controllers\Features\testController;


Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');

include(app_path().'/Providers/system/start.php');
foreach ($social_logins as $name=>$callback) { 
    Route::get('/auth/'.$name.'', [SocialLoginController::class, ''.$name.'']);
    Route::get('/auth/'.$name.'/callback', [SocialLoginController::class, ''.$callback.'']);
}

 include(app_path().'/Providers/system/routes-cache.php');