<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/register', function () {
//    return view(view: 'register'); // 'register' corresponds to 'register.blade.php'
//})->name(name: 'artpons.register');
//
//Route::get('/login', function () {
//    return view(view: 'login'); // 'register' corresponds to 'register.blade.php'
//})->name(name: 'artpons.login');

Route::get('/dashboard', function () {
    return view(view: 'user_dashboard'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.dashboard');

Route::get('/admin/dashboard', function () {
    return view(view: 'admin_dashboard'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.admin.dashboard');

Route::get('/booking_history', function () {
    return view(view: 'booking_history'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.booking_history');

Route::get('/booking', function () {
    return view(view: 'booking'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.booking');

Route::get('/contact', function () {
    return view(view: 'contact'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.contact');

Route::get('/payment', function () {
    return view(view: 'payment'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.payment');

Route::get('/payment_history', function () {
    return view(view: 'payment_history'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.payment_history');

Route::get('/profile', function () {
    return view(view: 'profile'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.profile');

Route::get('/service', function () {
    return view(view: 'service'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.service');

Route::get('/track', function () {
    return view(view: 'track'); // 'register' corresponds to 'register.blade.php'
})->name(name: 'artpons.track');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
