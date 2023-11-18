<?php

use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
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

/*-----------------------------Projects Routes-----------------------------*/

Route::controller(FrontendProjectController::class)->group(function () {
    Route::get('projects', 'showAllProjects')->name('showAllProjects');
    Route::get('project/{id}', 'showProject')->name('showProject');
});

Route::resource('complains', ComplainController::class);

Route::get('/', function () {
    return view('welcome');
});