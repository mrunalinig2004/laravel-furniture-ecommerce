<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController; // ✅ Moved to the top section

// Homepage route
Route::get('/', function () {
    return view('home');
});

// Products page
Route::get('/products', function () {
    return view('products');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// ✅ CART ROUTES
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

