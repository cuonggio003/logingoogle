<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\NoteAjaxController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'showFormLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/register', [LoginController::class, 'showFormRegister'])->name('show.register');
Route::post('/register', [LoginController::class,'register'])->name('register');


Route::get('change-password', [LoginController::class, 'showFormChangePassword'])->name('change.form');
Route::post('change-password', [LoginController::class, 'changePassword'])->name('change.password');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('notes')->group( function(){
    Route::get('/note', [NoteController::class, 'showNote'])->name('show.note');
    Route::get('/create', [NoteController::class, 'createNote'])->name('create.note');
    Route::post('/create', [NoteController::class, 'store'])->name('store.note');
    Route::get('/{id}update', [NoteController::class, 'updateNote'])->name('update.note');
    Route::post('/{id}update', [NoteController::class, 'editNote'])->name('edit.note');
    Route::get('/{id}/delete', [NoteController::class, 'deleteNote'])->name('delete.note');
});


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);

Route::get('/callback/{provider}', [SocialController::class, 'callback']);



