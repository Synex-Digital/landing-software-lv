<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\LandingPageController;

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
    //Esmail Commit
    Route::get('/appearance', [ThemeController::class, 'index'])->name('appearance');
    Route::get('/preview/{slug}', [ThemeController::class, 'preview'])->name('appearance.preview');
    Route::post('/zip_upload', [ThemeController::class, 'upload'])->name('zip.upload');
    Route::get('/theme/delete/{slug}', [ThemeController::class, 'delete'])->name('theme.delete');
});
