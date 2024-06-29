<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
    return view('home');
});

// Route::get('/token', function() {
//     return csrf_token();
// });

Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginPage']);

Route::prefix('articles')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('articles-page');
});

Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard-page');
});
