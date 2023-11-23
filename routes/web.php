<?php

<<<<<<< HEAD

=======
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
>>>>>>> 705c2847c769499fa843cabaa8bc426293236797
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\InvestmentController as FrontendInvestmentsController;
use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
<<<<<<< HEAD
use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\EventDetailController as FrontendEventDetailController;
=======
>>>>>>> 705c2847c769499fa843cabaa8bc426293236797

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


/*----------------------------- Projects Routes Start -----------------------------*/

Route::controller(FrontendProjectController::class)->group(function () {
    Route::get('projects', 'showAllProjects')->name('showAllProjects');
    Route::get('project/{id}', 'showProject')->name('showProject');
});
/*----------------------------- Projects Routes End -----------------------------*/

/*--------------------- Investment-Opportunity Routes Start ---------------------*/

Route::controller(FrontendInvestmentsController::class)->group(function () {
    Route::get('investments', 'showAllInvestments')->name('showAllInvestments');
    Route::get('investment/{id}', 'showInvestment')->name('showInvestment');
});

/*--------------------- Investment-Opportunity Routes End ----------------------*/

/*------------------------------ News Routes Start -----------------------------*/
Route::controller(FrontendNewsController::class)->group(function () {
    Route::get('news', 'showAllNews')->name('showAllNews');
    Route::get('new-details/{id}', 'showDetailsNews')->name('showDetailsNews');
});
/*------------------------------- News Routes End -------------------------------*/


Route::resource('complains', ComplainController::class);
<<<<<<< HEAD

Route::get('events', [FrontendEventController::class, 'index']);
Route::get('/eventdetails/{id}', [FrontendEventDetailController::class, 'eventdetal'])->name('eventdetail');
Route::post('/eventdetails/{id}', [FrontendEventDetailController::class, 'store'])->name('eventdetailform');
=======
Route::resource('tenders', TenderController::class);
Route::resource('tendersDetailes', TendersDetailesController::class);
>>>>>>> 705c2847c769499fa843cabaa8bc426293236797
