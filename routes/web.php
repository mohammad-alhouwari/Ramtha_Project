<?php

use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\MediaController as FrontendMediaController;

use App\Http\Controllers\Frontend\NewController as FrontendNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplainController;
Route::get('/', function () {
    return view('welcome');
});

/*-----------------------------Projects Routes-----------------------------*/

Route::controller(FrontendProjectController::class)->group(function () {
    Route::get('projects', 'showAllProjects')->name('showAllProjects');
    Route::get('project/{id}', 'showProject')->name('showProject');
});
Route::controller(FrontendNewsController::class)->group(function () {
    Route::get('news', 'showAllNews')->name('showAllNews');
    Route::get('new-details/{id}', 'showDetailsNews')->name('showDetailsNews');
});


Route::get('/', function () {
    return view('index');
});
Route::resource('complains', ComplainController::class);


// ------------------Gallery Pages--------------------//

// Route::get('/gallery', function () {
// return view('Pages.Gallery.gallery');
// });

// Route::get('/single_gallery', function () {
//     return view('Pages.Gallery.single_gallery');
// });

Route::controller(FrontendMediaController::class)->group(function () {
    Route::get('gallery', 'showGallery')->name('showGallery');
    Route::get('single_gallery/{id}/{type}', 'showSingleGallery')->name('single_gallery');

});