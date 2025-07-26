<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\SpiceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/deluxe', function () {
    return view('deluxe');
});

Route::get('/collections', function () {
    return view('collections');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});



Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SpiceController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/SpiceIndex', 'Index')->name('spice.index');
    Route::post('/SpiceCreate', 'Create')->name('spice.create');
    Route::put('/spice/update/{id}', [SpiceController::class, 'Update'])->name('spice.update');
    Route::delete('/spice/delete/{id}', [SpiceController::class, 'Delete'])->name('spice.delete');
    

});

require __DIR__.'/auth.php';
