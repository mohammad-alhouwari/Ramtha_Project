<?php

use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;

use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;

use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
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
/*-----------------------------Home Routes-----------------------------*/
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [HomeController::class, 'president'])->name('home');

Route::controller(FrontendHomeController::class)->group(function () {
    Route::get('/', 'index');
});

/*-----------------------------Home Routes End-----------------------------*/


/*-----------------------------Projects Routes-----------------------------*/
/*----------------------------- Projects Routes Start -----------------------------*/

Route::controller(FrontendProjectController::class)->group(function () {
    Route::get('projects', 'showAllProjects')->name('showAllProjects');
    Route::get('project/{id}', 'showProject')->name('showProject');
});
/*----------------------------- Projects Routes End -----------------------------*/

/*------------------------------ News Routes Start ------------------------------*/
Route::controller(FrontendNewsController::class)->group(function () {
    Route::get('news', 'showAllNews')->name('showAllNews');
    Route::get('new-details/{id}', 'showDetailsNews')->name('showDetailsNews');
});
/*------------------------------- News Routes End -------------------------------*/


Route::resource('complains', ComplainController::class);
Route::resource('tenders', TenderController::class);
Route::resource('tendersDetailes', TendersDetailesController::class);
