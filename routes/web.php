<?php

use App\Http\Controllers\Admin\About\AboutCategoryController;
use App\Http\Controllers\Admin\About\AboutController;
use App\Http\Controllers\Admin\AppealController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\Photo\PhotoCategoryController;
use App\Http\Controllers\Admin\Photo\PhotoController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Video\VideoCategoryController;
use App\Http\Controllers\Admin\Video\VideoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\AboutController as FrontAboutController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Front\GalleryController as FrontGalleryController;
use App\Http\Controllers\Front\SponsoredController as FrontSponsoredController;
use Illuminate\Support\Facades\Route;

// Front
Route::get('/', [FrontHomeController::class, 'index'])->name('home');

Route::prefix('about')->name('about.')->group(function () {
    Route::get('/us', [FrontAboutController::class, 'index'])->name('us');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [FrontContactController::class, 'index'])->name('index');
    Route::post('/send-message', [FrontContactController::class, 'sendMessage'])->name('send-message');
});

// Gallery
Route::prefix('gallery')->name('gallery.')->group(function () {
    Route::get('/photo', [FrontGalleryController::class, 'photo'])->name('photo');
    Route::get('/video', [FrontGalleryController::class, 'video'])->name('video');
});

Route::get('/donate', [FrontSponsoredController::class, 'donate'])->name('donate.index');
