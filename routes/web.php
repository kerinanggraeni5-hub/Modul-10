<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('selamat datang di halaman utama!');
});

Route::get('/hello', function () {
    return 'Hello, Kerin Anggraeni';
});

Route::get('user/{name}', function ($name) {
    return "Nama Saya $name";
}
);

Route::get('/greet/{name?}', function ($name = 'Guest') {
    return "Halo, $name";
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('about', function() {
    return view('about', ['name' => 'Kerin Anggraeni']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
})->name('home.page');