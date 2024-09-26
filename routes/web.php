<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ColorAndSizeController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\LandingPageController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\SettingController;


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::post('/welcome/store', [WelcomeController::class, 'welcome_store'])->name('welcome.store');
//login
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login/check', [AdminController::class, 'login_check'])->name('admin.login_check');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');


Route::middleware(['auth'])->group(function () {
    // Admin
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/update', [AdminController::class, 'profile_update'])->name('admin.profile_update');
    //settings
    Route::get('/settings', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('setting.update');
    //landing page
    Route::resource('/landing-page', LandingPageController::class);
    //inventory
    Route::resource('/inventory', InventoryController::class);
    //color and size
    Route::get('/color-and-size', [ColorAndSizeController::class, 'index'])->name('color_and_size.index');
    Route::post('/color/store', [ColorAndSizeController::class, 'color_store'])->name('color.store');
    Route::post('/color/update', [ColorAndSizeController::class, 'color_update'])->name('color.update');
    Route::post('/color/destroy', [ColorAndSizeController::class, 'color_destroy'])->name('color.destroy');
    //size
    Route::post('/size/store', [ColorAndSizeController::class, 'size_store'])->name('size.store');
    Route::post('/size/update', [ColorAndSizeController::class, 'size_update'])->name('size.update');
    Route::post('/size/destroy', [ColorAndSizeController::class, 'size_destroy'])->name('size.destroy');
    //Esmail Commit
    Route::get('/appearance', [ThemeController::class, 'index'])->name('appearance');
    Route::get('/preview/{slug}', [ThemeController::class, 'preview'])->name('appearance.preview');
    Route::post('/zip_upload', [ThemeController::class, 'upload'])->name('zip.upload');
});
