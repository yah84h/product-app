<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Read
Route::get('/showitems',[productcontroller::class,'ShowItems']);

//Create
Route::post('/create',[productcontroller::class,'CreateProduct'])->name('create-product');

//Delete
Route::get('/delete/{id}',[productcontroller::class,'DeleteProduct'])->name('del-product');

//Edit and Update
Route::get('/edit/{id}',[productcontroller::class,'EditProduct'])->name('edit-product');
Route::post('/edit/{id}',[productcontroller::class,'UpdateProduct'])->name('update-product');