<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/produk', function () {
    return response()->json([
        ['id' => 1, 'nama' => 'Laptop Gaming'],
        ['id' => 2, 'nama' => 'Mechanical Keyboard'],
    ]);
});
