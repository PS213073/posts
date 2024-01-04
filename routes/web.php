<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

//Admin routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('categories', CategoryController::class)
        ->middleware(['is_admin',]);
    Route::resource('posts', PostController::class)
        ->middleware(['is_admin',]);
});

// User routes
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::view('/about', 'about')->name('about');
// Route::view('/contact', 'contact')->name('contact');

// Route::prefix('posts')->group(function () {
//     Route::get('{post}', [PostController::class, 'show'])->name('show');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
