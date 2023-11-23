<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProjectController as BackendProjectController;
use App\Http\Controllers\Backend\PartnerController as BackendPartnerController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Backend\MediaController as BackendMediaController;
use App\Http\Controllers\Backend\ComplainController as BackendComplainController;
use App\Http\Controllers\Backend\InvestmentController as BackendInvestmentController;
<<<<<<< HEAD
use App\Http\Controllers\Backend\EventController as BackendEventController;
use App\Http\Controllers\Backend\EventParticipantController as BackendEventParticipantController;
=======
use App\Http\Controllers\Backend\NewController as BackendNewController;
use App\Http\Controllers\Backend\JobController as BackendJobController;
>>>>>>> 705c2847c769499fa843cabaa8bc426293236797
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(
    function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        //Projects Route
        Route::resource('projects-admin', BackendProjectController::class);

        //Project Medias Route
        Route::resource('medias-admin', BackendMediaController::class);
        Route::get('medias-admin/create/project/{project_id}', [BackendMediaController::class, 'createProject'])->name('medias-admin.create.project');

        //News Medias Route
        Route::get('medias-admin/create/news/{news_id}', [BackendMediaController::class, 'createNews'])->name('medias-admin.create.news');

        //Admins Route
        Route::resource('admin-users', BackendUserController::class);

        // Complain Route
        Route::resource('complain-admin', BackendComplainController::class);

        //Investment opportunities Route
        Route::resource('investments-admin', BackendInvestmentController::class);
<<<<<<< HEAD
        //Event Route
        Route::resource('Events-admin', BackendEventController::class);
        //Event Participant Route
        // Route::resource('EventParticipant-admin',BackendEventParticipantController::class);
        Route::resource('EventParticipant-admin', BackendEventParticipantController::class)->parameters([
            'EventParticipant-admin' => 'id'
        ]);
=======

        //jobs opportunities Route
        Route::resource('jobs-admin', BackendJobController::class);

        // News Route
        Route::resource('news-admin', BackendNewController::class);

        //Admins Route
        Route::resource('admin-users', BackendUserController::class);

        //Partners Route
        Route::resource('partners-admin', BackendPartnerController::class);

>>>>>>> 705c2847c769499fa843cabaa8bc426293236797
        // Profile Routes
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/profile-update/{id}', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');
    }

);

//Team 
Route::get('team', function () {
    return view('Pages.team');
})->name('team');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
