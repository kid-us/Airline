<?php

use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\ClerkController;
use App\Http\Controllers\Auth\ManagerController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlaneController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\USerController;
// require '../vendor/autoload.php';

use Twilio\Rest\Client;


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

Route::get('/air', [HomeController::class, 'index'])->name('air');
Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::post('/insert', [InsertController::class, 'store'])->name('insert');
Route::post('/register',[RegisterController::class, 'store'])->name('register');
Route::patch('/update', [RegisterController::class, 'edit'])->name('update');
Route::post('/create', [CreateController::class, 'store'])->name('create');
Route::post('/delete-flight', [RegisterController::class, 'destroy'])->name('create');

Route::get('/passenger/{user}', function($user){
    return view('Layout.passenger', ['user' => $user]);
});


Route::controller(PlaneController::class)->prefix('flight')->group(function () {
    Route::post('/find', 'findFlight');
    Route::post('/booking', 'booking');
    Route::post('/status', 'status');
    Route::post('/check-in', 'checkIn');
    Route::post('/selected', 'pick');
    Route::delete('/cancel', 'cancel');
});


Route::controller(ClerkController::class)->prefix('clerk')->group(function (){
    Route::get('login', 'showLogin');
    Route::post('/login/done', 'login');
    Route::get('/profile', 'profile')->middleware('clerk.auth');
    Route::get('logout', 'logout')->middleware('clerk.auth');
});

Route::controller(ManagerController::class)->prefix('manager')->group(function () {
    Route::get('login', 'showLogin');
    Route::post('/login/done', 'login');
    Route::get('/profile','profile')->middleware('manager.auth');
    Route::get('logout', 'logout')->middleware('manager.auth');
});

Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('login', 'showLogin');
    Route::post('/login/done', 'login');
    Route::get('/profile', 'profile')->middleware('admin.auth');
    Route::get('logout','logout')->middleware('admin.auth');
});


Route::get('/round-trip', function(){
    return view('Layout.passenger');
});

Route::post('/passenger/check', [PassengerController::class, 'store']);



Route::get('/payment', [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'store']);



Route::get('/pay', function () {
    return view("Layout.payPal");
});


Route::get('/ticket', [TicketController::class, 'index']);
Route::post('/ticket', [TicketController::class, 'destroy']);



Route::controller(USerController::class)->prefix('user')->group(function () {
    Route::get('login', 'login');
    Route::post('/register', 'register');
});


Route::post('/pay', [StripePaymentController::class, 'stripePost']);

