<?php

use App\Models\Spices;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\admin\SpiceController;
use App\Http\Controllers\CartController; // Import the new controller

//general routes
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    $spices = Spices::all();
    return view('products',compact('spices'));
});

Route::get('/deluxe', function () {
    return view('deluxe');
});

Route::get('/collections', function () {
    return view('collections');
});


//only accessible for authorized users
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');


//edit profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin spice management
Route::controller(SpiceController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/SpiceIndex', 'Index')->name('spice.index');
    Route::post('/SpiceCreate', 'Create')->name('spice.create');
    Route::put('/spice/update/{id}', [SpiceController::class, 'Update'])->name('spice.update');
    Route::delete('/spice/delete/{id}', [SpiceController::class, 'Delete'])->name('spice.delete');
});


Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

//cart system
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

//checkout and user's orders
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});


//Admin's orders
Route::get('/admin/orders', [App\Http\Controllers\admin\OrderController::class, 'index'])->name('admin.orders.index');



require __DIR__.'/auth.php';