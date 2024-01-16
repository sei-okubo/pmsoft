<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ArticleController;

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

// 記事詳細画面表示
Route::get('/article/{id}', [ArticleController::class, 'showArticleDetail'])->name('showArticleDetail');

// ログイン前のみ
Route::middleware(['guest'])->group(function() {
    // トップ画面表示
    Route::get('/', [AuthController::class, 'top'])->name('top');

    // ログインフォーム表示
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    
    // ログイン実行
    Route::post('/exeLogin', [AuthController::class, 'exeLogin'])->name('exeLogin');
    
    Route::prefix('admin')->name('admin.')->group(function () {
        // 管理者ログインフォーム表示
        Route::get('/login', [AuthController::class, 'showLoginAdmin'])->name('login');
        // 管理者ログイン実行
        Route::post('/exeLogin', [AuthController::class, 'exeLoginAdmin'])->name('exeLogin');
    });

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
    // ホーム表示
    Route::get('/home', [AuthController::class, 'showHome'])->name('home');

    // ログアウト
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // 物件登録画面表示
    Route::get('/property_form', [PropertyController::class, 'showPropertyForm'])->name('showPropertyForm');
    // 物件登録処理
    Route::post('/storeProperty', [PropertyController::class, 'storeProperty'])->name('storeProperty');
    // 物件詳細画面表示
    Route::get('/property/{id}', [PropertyController::class, 'showPropertyDetail'])->name('showPropertyDetail');
    // 物件編集画面表示
    Route::get('/property_edit/{id}', [PropertyController::class, 'showEditProperty'])->name('showEditProperty');
    // 物件編集処理
    Route::patch('/exeEditProperty', [PropertyController::class, 'exeEditProperty'])->name('exeEditProperty');
    // 物件削除処理
    Route::delete('/exeDeleteProperty', [PropertyController::class, 'exeDeleteProperty'])->name('exeDeleteProperty');
    // 物件シミュレーション
    Route::post('/simulation', [PropertyController::class, 'simulation'])->name('simulation');

    // 管理者
    Route::prefix('admin')->name('admin.')->group(function () {
        // ホーム表示
        Route::get('/', [AuthController::class, 'showHomeAdmin'])->name('home');
        // ユーザ削除
        Route::patch('/deleteUser', [AuthController::class, 'deleteUser'])->name('deleteUser');
        // 記事登録画面表示
        Route::get('/article/form', [ArticleController::class, 'showArticleForm'])->name('showArticleForm');
        // 記事登録処理
        Route::post('/storeArticle', [ArticleController::class, 'storeArticle'])->name('storeArticle');
        // 記事編集画面表示
        Route::get('/article_edit/{id}', [ArticleController::class, 'showEditArticle'])->name('showEditArticle');
        // 記事編集処理
        Route::patch('/exeEditArticle', [ArticleController::class, 'exeEditArticle'])->name('exeEditArticle');
        // 記事削除処理
        Route::delete('/exeDeleteArticle', [ArticleController::class, 'exeDeleteArticle'])->name('exeDeleteArticle');
        // 記事詳細管理者画面表示
        Route::get('/article/{id}', [ArticleController::class, 'showArticleDetailAdmin'])->name('showArticleDetail');
    });
});