<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

// Public Blog Routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

// Public Project Routes
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{project:slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');

// Authentication Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::delete('/blog-image/{image}', [App\Http\Controllers\Admin\BlogController::class, 'deleteImage'])->name('blog-image.destroy');
    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('project', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('tech-stack', App\Http\Controllers\Admin\TechStackController::class);
    Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('skill', App\Http\Controllers\Admin\SkillController::class);

    Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});