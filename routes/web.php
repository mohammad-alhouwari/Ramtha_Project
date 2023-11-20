<?php

use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;

use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;

Route::get('/', function () {
    return view('welcome');
});

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


Route::get('/', function () {
    return view('index');
});
Route::resource('complains', ComplainController::class);
