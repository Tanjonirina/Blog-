<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Home\HomeController;
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

Route::get('/',[HomeController::class , 'index'])->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/',[AuthController::class, 'index'])->name('login');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/create',[AdminController::class,'create'])->name('article.create');
    Route::get('/userCreat', [AdminController::class, 'user'])->name(('user.creat'));
    Route::get('/list', [AdminController::class, 'article'])->name(('article.list'));
    Route::get('/liste', [AdminController::class, 'list'])->name(('user.list'));
    Route::post('/login',[AuthController::class,'login'])->name('submite.login');
    Route::get('/article/show/{id}',[AdminController::class,'show'])->name('article.show');
    Route::get("/users/show/{id}",[UserController::class,"show"])->name("show.user");
    Route::post("/user/creat",[UserController::class, "store"])->name('store.user');
    Route::get("/user/modif/{id}",[AdminController::CLASS, "edit"])->name('artice.update');
});
