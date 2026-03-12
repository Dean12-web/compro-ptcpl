<?php

use App\Http\Controllers\Admin\ContentBlockController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExportCountryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\ProductApiController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/test-email', function () {
    Mail::raw('Test Email Dari Laravel Cendana', function ($message) {
        $message->to('mahyudinakbar10@gmail.com')->subject('Test Email');
    });

    return 'Email Sent';
});

Route::redirect('/', '/en');

Route::group(['prefix' => '{locale}',   'where' => ['locale' => 'en|id'], 'middleware' => 'setLocale'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::view('/product-detail', 'front.pages.product-detail');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/exports', [PageController::class, 'exports'])->name('exports');
    Route::get('/production', [PageController::class, 'production'])->name('production');
    Route::get('/sustainability', [PageController::class, 'sustainability'])->name('sustainability');
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
});

Route::prefix('cpl-admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('cpl.dashboard');

    Route::get('/inquiry-view', [InquiryController::class, 'index'])->name('cpl.inquiry-view');
    Route::get('/setting', [SettingController::class, 'index'])->name('cpl.setting');


    Route::resource('/web-content', ContentBlockController::class);

    Route::resource('/gallery', GalleryController::class);
    Route::post('/gallery-store', [GalleryController::class, 'store'])->name('cpl.gallery-store');
    Route::put(
        '/gallery-update-status/{gallery}',
        [GalleryController::class, 'updateStatus']
    )->name('cpl.gallery-update-status');

    Route::delete('/gallery-delete/{gallery}', [GalleryController::class, 'destroy'])->name('cpl.gallery-delete');

    Route::resource('/products', AdminProductController::class)->except(['create']);
    Route::get('/products-data', [ProductApiController::class, 'index'])->name('cpl.products-data');
    Route::get('/products-data/{product}', [ProductApiController::class, 'show'])->name('cpl.products-data.show');
    Route::get('/products-stats', [ProductApiController::class, 'stats']);
    Route::put('/products-data/{product}', [ProductApiController::class, 'update']);
    Route::delete('/products-image/{image}', [ProductApiController::class, 'deleteImage']);
    Route::delete('/products-data/{product}', [ProductApiController::class, 'destroy']);


    Route::get('/export-country', [ExportCountryController::class, 'index'])->name('cpl.export-country');
    Route::post('/export-country-store', [ExportCountryController::class, 'store'])->name('cpl.export-country-store');
    Route::get('/export-country-data', [ExportCountryController::class, 'view']);
    Route::delete('/export-country-delete/{export_country}',[ExportCountryController::class,'destroy']);
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

Route::view('/dashboard-sampel', 'admin.pages.home');

require __DIR__ . '/auth.php';
