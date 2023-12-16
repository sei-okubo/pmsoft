<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PropertyController;

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
    })->name('top');

    // ログインフォーム表示
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    // ログイン実行
    Route::post('/exeLogin', [AuthController::class, 'exeLogin'])->name('exeLogin');

    // 新規登録フォーム表示
    Route::get('/signup', [AuthController::class, 'showSignup'])->name('showSignup');
    Route::post('/store', [AuthController::class, 'storeUser'])->name('storeUser');

    // パスワードリセット関連
    Route::prefix('password_reset')->name('password_reset.')->group(function () {
        Route::prefix('email')->name('email.')->group(function () {
            // パスワードリセットメール送信フォームページ
            Route::get('/', [PasswordController::class, 'emailFormResetPassword'])->name('form');
            // メール送信処理
            Route::post('/', [PasswordController::class, 'sendEmailResetPassword'])->name('send');
            // メール送信完了ページ
            Route::get('/send_complete', [PasswordController::class, 'sendComplete'])->name('send_complete');
        });
        // パスワード再設定ページ
        Route::get('/edit', [PasswordController::class, 'edit'])->name('edit');
        // パスワード更新処理
        Route::post('/update', [PasswordController::class, 'update'])->name('update');
        // パスワード更新終了ページ
        Route::get('/edited', [PasswordController::class, 'edited'])->name('edited');
    });
});

// ログイン後のみ
Route::middleware(['auth'])->group(function() {
    // ホーム画面表示
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // ログアウト
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // 物件登録画面表示
    Route::get('/property_form', [PropertyController::class, 'showPropertyForm'])->name('showPropertyForm');
});