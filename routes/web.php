<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Clients\SearchController;
use App\Http\Controllers\Clients\CollectionController;
use App\Http\Controllers\admin\AdminController;

use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Userscontroller;
use App\Http\Controllers\LoginController;



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
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/check',[LoginController::class,'loginCheck'])->name('loginCheck');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/admin',[AdminController::class,'index'])->name('home_admin');

Route::get('/',[ClientController::class,'index'])->name('home');
Route::get('/search',[SearchController::class,'index'])->name('search');
Route::get('/collection',[CollectionController::class,'index'])->name('collection');



// Route::prefix('admin')->middleware('auth')->group(function(){
//     Route::get('/',[AdminController::class,'index'])->name('index');

// });
Route::prefix('users')->name('users.')->group(function(){
    Route::get('/',[UsersController::class,'index'])->name('index');

    Route::get('/add',[UsersController::class,'add'])->name('add');

    Route::post('/add',[UsersController::class,'postAdd'])->name('postAdd');

    Route::get('/edit/{id}',[UsersController::class,'getEdit'])->name('getEdit');

    Route::post('/update',[UsersController::class,'postEdit'])->name('postEdit');

    Route::get('/delete/{id}',[UsersController::class,'delete'])->name('delete');
});
