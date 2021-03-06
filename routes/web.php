<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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
    return view('welcome');
});

Route::view('entry', 'transactionEntry');

Route::get('transactions', [TransactionController::class, 'loadAll']);

Route::post('transactions', [TransactionController::class, 'addEdit']);

Route::get('{id}', [TransactionController::class, 'onEdit']);

Route::get('delete/{id}', [TransactionController::class, 'delete']);
