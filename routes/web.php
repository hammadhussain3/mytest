<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[UserController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function () {
Route::get('/admin/dashboard',[UserController::class,'admin_dashboard'])->name('admin_dashboard')->middleware('role:admin');
Route::get('/editor/dashboard',[UserController::class,'editor_dashboard'])->name('editor_dashboard')->middleware('role:editor');
Route::get('/viewer/dashboard',[UserController::class,'viewer_dashboard'])->name('viewer_dashboard')->middleware('role:viewer');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/add/category',[CategoryController::class,'add_category'])->name('category.add');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit_category'])->name('category.edit');
Route::get('/category/delete/{id}',[CategoryController::class,'delete_category'])->name('category.delete');
Route::post('/category/update',[CategoryController::class,'update_category'])->name('update_category');
});
Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::post('/check_login',[UserController::class,'check_login'])->name('check_login');

