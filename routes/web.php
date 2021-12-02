<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialController;

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

