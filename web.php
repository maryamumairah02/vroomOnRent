<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; 
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\FeedbackController; 
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\HomeController; 


Route::get('/', function () {
    return view('auth/register');
});

//register user
Route::get('/register',[AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

// login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//homepage
Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Register Vehicle
Route::get('/create', function () {
    return view('vehicle/create');
});
Route::post('/create', [VehicleController::class, 'create'])->name('vehicle.create');

// Rent Vehicle
Route::get('/rent', function () {
    return view('vehicle/rent');
});

Route::post('/rent', function () {$cat = new Rental();
    $cat -> vehicle_type = request('vehicle_type');
    $cat -> rental_id = request('rental_id');
    $cat -> rental_start = request('rental_start');
    $cat -> rental_end = request('rental_end');
    $cat -> save();

    return redirect('/users');
});


// feedback form
Route::get('/feedback_form', function(){
    return view('feedback/feedback_form');
});

Route::post('/feedback_form', [FeedbackController::class, 'feedback_form'])->name('feedback.feedback_form');

Route::get('/available-vehicles', 'VehicleController@displayAvailableVehicles');

Route::get('stripe', [StripePaymentController::class, 'stripe']);

Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');

route::get('createpaypal',[PaypalController::class,'createpaypal'])->name('createpaypal');

route::get('receipt',[PaypalController::class,'receipt'])->name('receipt');

route::get('processPaypal',[PaypalController::class,'processPaypal'])->name('processPaypal');

route::get('processSuccess',[PaypalController::class,'processSuccess'])->name('processSuccess');

route::get('processCancel',[PaypalController::class,'processCancel'])->name('processCancel');

Route::get('/viewCat', [VehicleController::class, 'getData'])->name('viewCat');

Route::post('/rent', [VehicleController::class, 'checkAvailability']);