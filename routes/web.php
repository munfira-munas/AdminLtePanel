<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/accounts',[App\Http\Controllers\AccountsController::class,'index'])->name('accounts');//route name

Route::post('/getusersdata',[App\Http\Controllers\AccountUsersController::class,'getusersdata'])->name('getusersdata');//route name



Route::get('displayAccount/{id}',[App\Http\Controllers\AccountsController::class,'displayAccount']);


Route::get('/createAccount',[App\Http\Controllers\AccountsController::class,'createAccount'])->name('createAccount');//route name


Route::post('/saveAccount',[App\Http\Controllers\AccountsController::class,'saveAccount']);

// Route::get('addUser/{id}',[App\Http\Controllers\AccountUsersController::class,'addUser']);




Route::get('/createUser',[App\Http\Controllers\AccountUsersController::class,'createUser'])->name('createUser');//route name

Route::get('/saveUser',[App\Http\Controllers\AccountUsersController::class,'saveUser']);

Route::post('/getAccountdata',[App\Http\Controllers\AccountsController::class,'getAccountdata'])->name('getAccountdata');//route name


Route::get('deleteUser/{id}',[App\Http\Controllers\AccountUsersController::class,'deleteUser']);//shd be get


Route::get('editUser/{id}',[App\Http\Controllers\AccountUsersController::class,'editUser']);

//  Route::post('/updateUser',[App\Http\Controllers\AccountUsersController::class,'updateUser'])->name('updateUser');//route name

 Route::put('updUser/{id}', [App\Http\Controllers\AccountUsersController::class, 'updUser']);

 Route::get('inactivateUser/{id}',[App\Http\Controllers\AccountUsersController::class,'inactivateUser']);//shd be get

 Route::get('activateUser/{id}',[App\Http\Controllers\AccountUsersController::class,'activateUser']);//shd be get



 Route::get('act/{id}',[App\Http\Controllers\AccountUsersController::class,'act']);//shd be get


//  Route::get('activate',[App\Http\Controllers\AccountUsersController::class,'activate']);


Route::post('/ajax_request' , [App\Http\Controllers\AccountsController::class, 'ajax_request'])->name('ajax_request');






 