<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminRoutesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddUserController;
use App\Http\Livewire\Finance\Bm\BmRequest;
use App\Http\Livewire\Finance\Bm\Transactions;


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

//Home Routes
Route::get('/', function () {
    return redirect('/login');
});

//Login Routes
Route::get('/redirects',[LoginController::class, 'login']);

//Admin Routes
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('dashboard',[AdminRoutesController::class, 'index'])->name('dashboard');
    Route::resource('adduser', AddUserController::class);
});

//Logistics Routes
Route::prefix('logistics')->middleware('auth','isLogistics')->group(function(){
    Route::view('dashboard', 'livewire.logistics.dashboard')->name('logistics');
    
    
   
});

//Finance Routes
Route::prefix('finance')->middleware('auth','isFinance')->group(function(){
    Route::view('dashboard', 'livewire.finance.dashboard')->name('finance');
    Route::get('budget/transaction',Transactions::class)->name('transaction');
    Route::get('budget/request',BmRequest::class)->name('request');
});

//Core Routes
Route::prefix('core')->middleware('auth','isCore')->group(function(){
    Route::view('dashboard', 'livewire.core.dashboard')->name('core');
});

//HR Routes
Route::prefix('hr')->middleware('auth','isHr')->group(function(){
    Route::view('dashboard', 'livewire.hr.dashboard')->name('hr');
    Route::resource('test',BudgetRequest::class);
});




