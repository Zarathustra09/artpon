<?php

use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/register', function () {
//    return view(view: 'register'); // 'register' corresponds to 'register.blade.php'
//})->name(name: 'artpons.register');
//
//Route::get('/login', function () {
//    return view(view: 'login'); // 'register' corresponds to 'register.blade.php'
//})->name(name: 'artpons.login');

Route::get('/', function () {
    return view(view: 'welcome'); // 'register' corresponds to 'register.blade.php'
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', [GuestController::class, 'index'])->name('artpons.dashboard');

Route::get('/booking_history', [BookingController::class, 'bookingHistoryIndex'])->name('artpons.booking_history');
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');


//payment
Route::post('/payment/checkout', [PaymentController::class, 'store'])->name('payment.checkout');
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/failed', [PaymentController::class, 'failed'])->name('payment.failed');
Route::get('/payment_history', [PaymentController::class, 'index'])->name(name: 'artpons.payment_history');

//profile
Route::get('/profile', [ProfileController::class, 'index'])->name(name: 'artpons.profile');
Route::put('/profile', [ProfileController::class, 'update'])->name('artpons.profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('artpons.profile.destroy');


//admin routes
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('artpons.admin.dashboard');

Route::get('/admin/product', [AdminProductController::class,'index'])->name(name: 'artpons.admin.product');
Route::get('/admin/products/data', [AdminProductController::class, 'dataTable'])->name('admin.products.data');
Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/{id}', [AdminProductController::class, 'edit']);
Route::put('/admin/products/{id}', [AdminProductController::class, 'update']);
Route::delete('/admin/products/{id}', [AdminProductController::class, 'destroy']);

//customer admin
Route::get('/admin/customers', [AdminCustomerController::class, 'index'])->name('admin.customers.index');
Route::get('/admin/customers/data', [AdminCustomerController::class, 'dataTable'])->name('admin.customers.data');


//admin booking
Route::get('/admin/booking', [AdminBookingController::class, 'index'])->name('artpons.admin.booking');
Route::get('/admin/bookings/{id}/edit', [AdminBookingController::class, 'edit'])->name('admin.bookings.edit');
Route::put('/admin/bookings/{id}', [AdminBookingController::class, 'update'])->name('admin.bookings.update');
Route::get('/track/{id}', [BookingController::class, 'track'])->name('track');

Route::get('/admin/payment/index', [AdminPaymentController::class, 'index'])->name('admin.payments.index');
Route::get('/admin/payment/data', [AdminPaymentController::class, 'dataTable'])->name('admin.payments.data');


//admin profile
Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');
Route::put('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
