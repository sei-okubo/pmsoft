<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// ログイン前のみ
Route::middleware(['guest'])->group(function() {
    // トップ画面表示
    Route::get('/', function () {
        return view('top');
    });

    // ログインフォーム表示
    Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');
    // ログイン実行
    Route::post('/exeLogin', [AuthController::class, 'exeLogin'])
    ->name('exeLogin');

    // 新規登録フォーム表示
    Route::get('/signup', [AuthController::class, 'showSignup'])
    ->name('showSignup');
    Route::post('/store', [AuthController::class, 'storeUser'])
    ->name('store');
});

// ログイン後のみ
Route::middleware(['auth'])->group(function() {
    // ホーム画面表示
    Route::get('/home', function () {
        return view('home');
    });

    // ログアウト
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});