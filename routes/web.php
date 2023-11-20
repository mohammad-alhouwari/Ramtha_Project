<?php

use App\Http\Controllers\TenderController;
use App\Http\Controllers\TendersDetailesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;

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
    return view('Pages.projects');
});

Route::resource('complains', ComplainController::class);
Route::resource('tenders', TenderController::class);
Route::resource('tendersDetailes', TendersDetailesController::class);
