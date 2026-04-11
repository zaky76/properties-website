<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\HomeController; // এটি অবশ্যই দিবেন
use Illuminate\Support\Facades\Route;

// ১. আপনার হোমপেজ রাউট
// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']);
Route::get('/newsletter', [HomeController::class, 'newsletter']);

// ২. ড্যাশবোর্ড এবং প্রোফাইল (ডিফল্ট যা ছিল)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';