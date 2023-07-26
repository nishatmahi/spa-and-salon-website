<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CatagoryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\StylistController;
use App\Http\Controllers\Frontened\IndexController;
use App\Http\Controllers\Frontened\AboutController;
use App\Http\Controllers\Frontened\BookingController;
use App\Http\Controllers\Frontened\PackagesController;
use App\Http\Controllers\Frontened\CatagoryController as FrontendCatagoryController;
use App\Http\Controllers\ProfileController;
use App\Models\Package;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('Frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function() {
 Route::get('/',[AdminController::class,'index'])->name('index');
 Route::resource('/catagories',CatagoryController::class);
    Route::resource('/packages',PackageController::class);
    Route::resource('/stylist',StylistController::class);
    Route::resource('/reservation',ReservationController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index',[IndexController::class,'index'])->name('index');
Route::get('/catagories',[FrontendCatagoryController::class,'index'])->name('catagories.index');
Route::get('/catagories/{catagory}',[FrontendCatagoryController::class,'show'])->name('catagories.show');
Route::get('package',[PackagesController::class,'index']);
Route::get('booking',[BookingController::class,'stepOne'])->name('booking.step.one');
Route::post('booking',[BookingController::class,'storestepOne'])->name('booking.store.step.one');
Route::get('booking2',[BookingController::class,'stepTwo'])->name('booking.step.two');
Route::post('booking2',[BookingController::class,'storestepTwo'])->name('booking.store.step.two');
Route::get('about',[AboutController::class,'index']);
Route::get('/thankyou',[IndexController::class,'thankyou'])->name('thankyou');

require __DIR__.'/auth.php';
