<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'main'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::get('/single', [PageController::class, 'single'])->name('single');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


/////////// ************ CRUD ************** ///////////
// Route::get('posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
// Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::put('posts/{post}/edit', [PostController::class, 'update'])->name('posts.update');
// Route::delete('posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');

Route::resource('posts', PostController::class);