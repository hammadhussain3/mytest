<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[UserController::class,'login'])->name('login');
Route::middleware(['auth'])->group(function () {
Route::get('/admin/dashboard',[UserController::class,'admin_dashboard'])->name('admin_dashboard');
Route::get('/editor/dashboard',[UserController::class,'editor_dashboard'])->name('editor_dashboard')->middleware('role:editor|admin');
Route::get('/viewer/dashboard',[UserController::class,'viewer_dashboard'])->name('viewer_dashboard')->middleware('role:editor|admin|viewer');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/add/category',[CategoryController::class,'add_category'])->name('category.add')->middleware('permission:create');
Route::post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'edit_category'])->name('category.edit')->middleware('permission:update');
Route::get('/category/view/{id}',[CategoryController::class,'view_category'])->name('category.view')->middleware('permission:read');
Route::get('/category/delete/{id}',[CategoryController::class,'delete_category'])->name('category.delete')->middleware('permission:delete');
Route::post('/category/update',[CategoryController::class,'update_category'])->name('update_category');
});
Route::get('/logout',[UserController::class,'logout'])->name('logout');


Route::post('/check_login',[UserController::class,'check_login'])->name('check_login');

