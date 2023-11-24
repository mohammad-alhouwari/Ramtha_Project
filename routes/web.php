<?php


use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\MediaController as FrontendMediaController;

use App\Http\Controllers\Frontend\InvestmentController as FrontendInvestmentsController;
use App\Http\Controllers\Frontend\JobController as FrontendJobController;
use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use App\Http\Controllers\Frontend\SuggestionController as FrontendSuggestionController;
use App\Http\Controllers\TendersDetailesController;
use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\EventDetailController as FrontendEventDetailController;
use App\Http\Controllers\Frontend\PresidentController as FrontendPresidentController;
use App\Http\Controllers\Frontend\TenderController as FrontendTendersController;
use App\Http\Controllers\Frontend\MembersController as FrontendMembersController;
use App\Http\Controllers\Frontend\ComplainController as FrontendComplainController;
use App\Http\Controllers\Frontend\OwnershipTransferController as FrontendOwnershipTransferController;
use Illuminate\Support\Facades\Route;


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

/*------------------------ Organizational Chart Routes Start ------------------------*/
Route::get('organizational-chart', function () {
    return view('Pages.Organizational-Chart');
})->name('organizational-chart');
/*------------------------ Organizational Chart Routes End ------------------------*/

/*------------------------ About the Municipality Routes Start ------------------------*/
Route::resource('about-municipality', ComplainController::class);
Route::get('about-municipality', [FrontendMembersController::class, 'index'])->name('about-municipality');
/*------------------------ About the Municipality Routes End ------------------------*/

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

/*------------------------------ Jobs Routes Start ------------------------------*/
Route::controller(FrontendJobController::class)->group(function () {
    Route::get('jobs', 'showAllJobs')->name('showAllJobs');
    Route::get('job/{id}', 'showJob')->name('showJob');
});
/*------------------------------ Jobs Routes End -------------------------------*/

/*------------------------------ News Routes Start -----------------------------*/
Route::controller(FrontendNewsController::class)->group(function () {
    Route::get('news', 'showAllNews')->name('showAllNews');
    Route::get('news-details/{id}', 'showDetailsNews')->name('showDetailsNews');
});
/*------------------------------- News Routes End -------------------------------*/

Route::controller(FrontendMediaController::class)->group(function () {
    Route::get('gallery', 'showGallery')->name('showGallery');
    Route::get('single_gallery/{id}/{type}', 'showSingleGallery')->name('single_gallery');

});
/*----------------------------- Complain Routes Start -----------------------------*/
Route::resource('complains',FrontendComplainController ::class);
/*----------------------------- Complain Routes end -----------------------------*/

Route::get('events', [FrontendEventController::class, 'index']);
Route::get('/eventdetails/{id}', [FrontendEventDetailController::class, 'eventdetal'])->name('eventdetail');
Route::post('/eventdetails/{id}', [FrontendEventDetailController::class, 'store'])->name('eventdetailform');
/*----------------------------- Event Routes End -----------------------------*/

/*------------------------------ Tenders Routes Start ------------------------------*/
Route::controller(FrontendTendersController::class)->group(function () {
    Route::get('tenders', 'showAllTenders')->name('showAllTenders');
    Route::get('tender-details/{id}', 'showDetailsTenders')->name('showDetailsTenders');
});
/*------------------------------ Tenders Routes End ------------------------------*/


/*--------------------- Suggestions Routes Start ---------------------*/

Route::resource('suggestions', FrontendSuggestionController::class);

/*--------------------- Suggestions Routes End ----------------------*/


/*--------------------- Ownership_Transfer Routes Start ---------------------*/

Route::resource('ownership_transfer', FrontendOwnershipTransferController::class);

/*--------------------- Ownership_Transfer Routes End ----------------------*/
