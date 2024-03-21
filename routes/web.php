<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('/admin')->group(function () {
    Route::get('',function(){
        return view('admin.layout');
    });

Route::controller(CategoryController::class)->group(function (){
    Route::get('/categories', 'index')->name('category.index');
    Route::get('/categories/edit', 'edit')->name('category.edit');
    Route::post('/categories', 'store')->name('category.store');
    Route::get('/categories/{category}/edit', 'edit')->name('category.edit');
    Route::get('/categories/{category}','show')->name('category.show');
    Route::patch('/categories/{category}', 'update')->name('category.update');
    Route::delete('/categories/{category}', 'destroy')->name('category.destroy');
    });
});