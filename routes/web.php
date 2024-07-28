<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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



Route::get('/',[PostsController::class, 'Index'])->name('post.index');
Route::get('/Posts/Create',[PostsController::class, 'Create'])->name('post.create');
Route::post('/Store',[PostsController::class, 'Store'])->name('post.Store');
Route::get('/Posts/{post}/edit',[PostsController::class, 'Edit'])->name('post.edit');
Route::put('/Posts/{post}',[PostsController::class, 'Update'])->name('post.Update');
Route::get('/Posts/{post}',[PostsController::class, 'Show'])->name('post.show');
Route::delete('/Posts/{post}',[PostsController::class, 'Destroy'])->name('post.destroy');
 
// Route::resource('Posts', PostsController::class);