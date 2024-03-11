<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomAuthController;
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


Route::get ('/',[CustomAuthController :: class,'login'])->middleware('alreadyLoggedIn');
Route::get ('/register',[CustomAuthController :: class,'registration'])->middleware('alreadyLoggedIn');
Route::post ('/register-user',[CustomAuthController :: class,'registerUser'])->name('register-user');
Route::post ('/login-user',[CustomAuthController :: class,'loginUser'])->name('login-user');
Route::get('/logout',[CustomAuthController :: class,'logout']);
Route::get('/dashboard',[CustomAuthController :: class,'dashboard'])->middleware('isLoggedIn');

Route::get ('/tasks/add',[ProductController :: class,'add_task'])->middleware('isLoggedIn');
Route::post ('/tasks/store',[ProductController :: class,'store'])->middleware('isLoggedIn');

Route::get ('/tasks/list',[ProductController :: class,'list_project'])->middleware('isLoggedIn');
Route::get('/tasks/{id}/view', [ProductController::class,'view_task'])->middleware('isLoggedIn');

Route::get('/tasks/{id}/edit', [ProductController::class,'edit_task'])->middleware('isLoggedIn');
Route::put('/tasks/{id}/update', [ProductController::class,'update_task'])->middleware('isLoggedIn');
Route::get('/tasks/{id}/delete',[ProductController :: class,'delete_task'])->middleware('isLoggedIn');
// Route::get('/tasks/search', [ProductController::class, 'search'])->name('search');

