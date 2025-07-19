<?php

use Illuminate\Support\Facades\Route;
//here we are importing the AuthManager controller
use App\Http\Controllers\AuthManager;
//here we are importing the ProductsManager controller
use App\Http\Controllers\ProductsManager;
//here we are importing the AboutManager controller
use App\Http\Controllers\AboutManager;
//here we are importing the ContactManager controller
use App\Http\Controllers\ContactManager;



Route::get('/', [ProductsManager::class, 'index'])->name('products');

Route::get('/products/{slug}', [ProductsManager::class, 'details'])->name('products.details');

Route::middleware('auth')->group(function () { 
    Route::get('/cart/{id}', [ProductsManager::class, 'addToCart'])->name('cart.add');  
    Route::get('/cart', [ProductsManager::class, 'showCart'])->name('cart.show'); 
    Route::delete('/cart/remove/{id}', [ProductsManager::class, 'removeFromCart'])->name('cart.remove');
    
});



Route::get ('/about', [AboutManager::class,'about'])->name('about');
Route::get ('/contact', [ContactManager::class,'contact'])->name('contact');




Route::get ("login", [AuthManager::class , 'login']) -> name('login');
Route::post ("login", [AuthManager::class , 'loginPost']) -> name('login.post');


Route::get ("register", [AuthManager::class , 'register']) -> name('register');
Route::post ("register", [AuthManager::class , 'registerPost']) -> name('register.post');

Route::get('signout', [AuthManager::class, 'signout'])->name('signout');