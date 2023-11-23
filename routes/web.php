<?php


use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\MediaController as FrontendMediaController;

use App\Http\Controllers\Frontend\InvestmentController as FrontendInvestmentsController;
use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\EventDetailController as FrontendEventDetailController;
use App\Http\Controllers\Frontend\PresidentController as FrontendPresidentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
use App\Http\Controllers\Frontend\TenderController as FrontendTendersController;




use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\EventDetailController as FrontendEventDetailController;

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


/*----------------------------- President Routes Start -----------------------------*/
Route::get('president', [FrontendPresidentController::class, 'index'])->name('president');
/*----------------------------- President Routes End -----------------------------*/


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


// ------------------Gallery Pages--------------------//


Route::controller(FrontendMediaController::class)->group(function () {
    Route::get('gallery', 'showGallery')->name('showGallery');
    Route::get('single_gallery/{id}/{type}', 'showSingleGallery')->name('single_gallery');
});
Route::resource('tenders', TenderController::class);
Route::resource('tendersDetailes', TendersDetailesController::class);

Route::get('events', [FrontendEventController::class, 'index']);
Route::get('/eventdetails/{id}', [FrontendEventDetailController::class, 'eventdetal'])->name('eventdetail');
Route::post('/eventdetails/{id}', [FrontendEventDetailController::class, 'store'])->name('eventdetailform');
Route::resource('tenders', TenderController::class);
Route::resource('tendersDetailes', TendersDetailesController::class);

/*------------------------------ Tenders Routes Start ------------------------------*/
Route::controller(FrontendTendersController::class)->group(function () {
    Route::get('tenders', 'showAllTenders')->name('showAllTenders');
    Route::get('tender-details/{id}', 'showDetailsTenders')->name('showDetailsTenders');
});
