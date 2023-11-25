<?php


use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\MembersController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\MediaController as FrontendMediaController;
use App\Http\Controllers\Frontend\InvestmentController as FrontendInvestmentsController;
use App\Http\Controllers\Frontend\JobController as FrontendJobController;
use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use App\Http\Controllers\Frontend\SuggestionController as FrontendSuggestionController;
use App\Http\Controllers\Frontend\EventController as FrontendEventController;
use App\Http\Controllers\Frontend\EventDetailController as FrontendEventDetailController;
use App\Http\Controllers\Frontend\PresidentController as FrontendPresidentController;
use App\Http\Controllers\Frontend\TenderController as FrontendTendersController;
use App\Http\Controllers\Frontend\MembersController as FrontendMembersController;
use App\Http\Controllers\Frontend\ComplainController as FrontendComplainController;
use App\Http\Controllers\Frontend\OwnershipTransferController as FrontendOwnershipTransferController;
use App\Http\Controllers\Frontend\PollController as FrontendPollController;
use App\Http\Controllers\Frontend\LandmarksController as FrontendLandmarksController;

use Illuminate\Support\Facades\Route;

/*-----------------------------Home Routes-----------------------------*/

Route::controller(FrontendHomeController::class)->group(function () {
    Route::get('/', 'index');
})->name('home');
/*-----------------------------Home Routes End-----------------------------*/
Route::controller(FrontendHomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});
/*----------------------------- President Routes Start -----------------------------*/
Route::get('president', [FrontendPresidentController::class, 'index'])->name('president');
/*----------------------------- President Routes End -----------------------------*/

/*------------------------ Organizational Chart Routes Start ------------------------*/

/*------------------------ Organizational Chart Routes End ------------------------*/

/*------------------------ About the Municipality Routes Start ------------------------*/
Route::get('about-municipality', [MembersController::class, 'index'])->name('about-municipality');
Route::get('organizational-chart', [MembersController::class, 'organizationalChart'])->name('organizational-chart');
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

/*----------------------------- Complain Routes Start -----------------------------*/
Route::resource('complains', FrontendComplainController::class);
/*----------------------------- Complain Routes end -----------------------------*/

/*----------------------------- Gallery Routes Start -----------------------------*/
Route::controller(FrontendMediaController::class)->group(function () {
    Route::get('gallery', 'showGallery')->name('showGallery');
    Route::get('single_gallery/{id}/{type}', 'showSingleGallery')->name('single_gallery');
});
/*----------------------------- Gallery Routes End -----------------------------*/

/*----------------------------- Event Routes Start -----------------------------*/
Route::get('events', [FrontendEventController::class, 'index'])->name('events');
Route::get('/eventdetails/{id}', [FrontendEventDetailController::class, 'eventdetal'])->name('eventdetail');
Route::post('/eventdetails/{id}', [FrontendEventDetailController::class, 'store'])->name('eventdetailform');
/*----------------------------- Event Routes End -----------------------------*/

/*----------------------------- Poll Routes Start -----------------------------*/
Route::controller(FrontendPollController::class)->group(function () {
    Route::get('polls', 'showAllPolls')->name('showAllPolls');
    Route::get('poll/{id}', 'showPoll')->name('showPoll');
    Route::post('poll/{id}', 'userPoll')->name('userPoll');
});
/*----------------------------- Poll Routes End -----------------------------*/

/*------------------------------ Tenders Routes Start ------------------------------*/
Route::controller(FrontendTendersController::class)->group(function () {
    Route::get('tenders', 'showAllTenders')->name('showAllTenders');
    Route::get('tender-details/{id}', 'showDetailsTenders')->name('showDetailsTenders');
});
/*------------------------------ Tenders Routes End ------------------------------*/

/*--------------------------- Suggestions Routes Start --------------------------*/
Route::resource('suggestions', FrontendSuggestionController::class);
/*--------------------------- Suggestions Routes End ---------------------------*/

/*--------------------- Suggestions Routes End ----------------------*/


/*--------------------- Ownership_Transfer Routes Start ---------------------*/

Route::resource('ownership_transfer', FrontendOwnershipTransferController::class);

/*--------------------- Ownership_Transfer Routes End ----------------------*/
/*--------------------------- Landmarks Routes Start --------------------------*/
Route::controller(FrontendLandmarksController::class)->group(function () {
    Route::get('landmarks', 'showAllLandmarks')->name('showAllLandmarks');
    Route::get('landmark/{id}', 'showLandmark')->name('showLandmark');
});
/*--------------------------- Landmarks Routes End ---------------------------*/
