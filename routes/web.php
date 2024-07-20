<?php

use App\Http\Controllers\ContactInController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\ImageFeatureController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\WebSettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home.index', [
        'websetting' => \App\Models\WebSetting::first(),
        'heroes' => \App\Models\HeroSection::where('type_id', 1)->first(),
        'features' => \App\Models\ImageFeature::where('type_id', 1)->get(),
    ]);
});

Route::get('/team', [TeamController::class, 'frontendIndex']);

Route::get('/download', [VersionController::class, 'frontendIndex']);

Route::get('/contact', [ContactInController::class, 'frontendIndex']);

Route::get('/features/casenotification', function () {
    return view('frontend.features.case-specific.index', [
        'features' => \App\Models\ImageFeature::where('type_id', 7)->get(),
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/admin', function () {
    return redirect('/admin/dashboard');
})->middleware('auth');

Route::resource('/admin/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/admin/teams', TeamController::class)->middleware('auth');
Route::resource('/admin/versions', VersionController::class)->middleware('auth');
Route::resource('/admin/websetting', WebSettingController::class)->middleware('auth');
Route::resource('/admin/contactin', ContactInController::class)->middleware('auth');
Route::resource('/admin/heroes', HeroSectionController::class)->middleware('auth');
Route::resource('/admin/features', ImageFeatureController::class)->middleware('auth');
Route::resource('/admin/users', UserController::class)->middleware('auth');
