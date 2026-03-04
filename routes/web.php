<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}',   'where' => ['locale' => 'en|id'], 'middleware' => 'setLocale'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/products', [ProductController::class,'index'])->name('products');
    Route::view('/product-detail', 'front.pages.product-detail');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');
    Route::get('/exports', [PageController::class,'exports'])->name('exports');
    Route::get('/production', [PageController::class,'production'])->name('production');
    Route::get('/sustainability', [PageController::class,'sustainability'])->name('sustainability');
    Route::get('/gallery',[PageController::class,'gallery'] )->name('gallery');
});

Route::prefix('cpl')->middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('cpl.dashboard');
    Route::view('/products', 'admin.pages.products')->name('cpl.products');
    Route::view('/gallery', 'admin.pages.gallery')->name('cpl.gallery');
    Route::view('/inquiry-view', 'admin.pages.inquiry-view')->name('cpl.inquiry-view');
    Route::view('/web-content', 'admin.pages.website-content')->name('cpl.web-content');
    Route::view('/export-country', 'admin.pages.export-country')->name('cpl.export-country');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/','front.pages.home');
// Route::view('/about','front.pages.home');
// Route::view('/products','front.pages.products');
// Route::view('/product-detail','front.pages.product-detail');
// Route::view('/contact','front.pages.contact');
// Route::view('/exports','front.pages.export');
// Route::view('/production','front.pages.production');
// Route::view('/sustainability','front.pages.sutainability');
// Route::view('/gallery','front.pages.gallery');

Route::view('/dashboard-sampel','admin.pages.home');

require __DIR__ . '/auth.php';
