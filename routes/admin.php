<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PresidentsController as BackendPresidentsController;
use App\Http\Controllers\Backend\ProjectController as BackendProjectController;
use App\Http\Controllers\Backend\PartnerController as BackendPartnerController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Backend\MediaController as BackendMediaController;
use App\Http\Controllers\Backend\ComplainController as BackendComplainController;
use App\Http\Controllers\Backend\InvestmentController as BackendInvestmentController;
use App\Http\Controllers\Backend\EventController as BackendEventController;
use App\Http\Controllers\Backend\EventParticipantController as BackendEventParticipantController;
use App\Http\Controllers\Backend\NewController as BackendNewController;
use App\Http\Controllers\Backend\SuggestionController as BackendSuggestionController;
use App\Http\Controllers\Backend\TenderController as BackendTenderController;
use App\Http\Controllers\Backend\JobController as BackendJobController;
use App\Http\Controllers\Backend\MembersController as BackendMembersController;
use App\Http\Controllers\Backend\OwnershipTransferController as BackendOwnershipTransferController;
use App\Http\Controllers\Backend\PollTopicController as BackendPollTopicController;
use App\Http\Controllers\Backend\LandmarksController as BackendLandmarksController;
use App\Http\Controllers\Backend\MunicipalityInfoController as BackendMunicipalityInfoController;

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('auth')->group(
    function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        //**Projects Route
        Route::resource('projects-admin', BackendProjectController::class);

        //**Project Medias Route
        Route::resource('medias-admin', BackendMediaController::class);

        //**Admins Route
        Route::resource('admin-users', BackendUserController::class);

        //** Complain Route
        Route::resource('complain-admin', BackendComplainController::class);

        // Suggestion Route
        Route::resource('suggestions-admin', BackendSuggestionController::class);

        // Ownership_Transfer Route
        Route::resource('ownership-transfer-admin', BackendOwnershipTransferController::class);

        //**jobs opportunities Route
        Route::resource('jobs-admin', BackendJobController::class);

        //**Investment opportunities Route
        Route::resource('investments-admin', BackendInvestmentController::class);

        //**Event Route
        Route::resource('Events-admin', BackendEventController::class);

        //polls Topics Route
        Route::resource('pollTopics-admin', BackendPollTopicController::class);

        //** Event Participant
        Route::resource('EventParticipant-admin', BackendEventParticipantController::class)->parameters([
            'EventParticipant-admin' => 'id'
        ]);

        //** News Route
        Route::resource('news-admin', BackendNewController::class);

        //** Tenders Route
        Route::resource('tenders-admin', BackendTenderController::class);

        //**Admins Route
        Route::resource('admin-users', BackendUserController::class);

        //**Partners Route
        Route::resource('partners-admin', BackendPartnerController::class);

        //**Presidents Route
        Route::resource('presidents-admin', BackendPresidentsController::class);

        //**Members Route
        Route::resource('members-admin', BackendMembersController::class);

        //**Landmarks Route
        Route::resource('landmarks-admin', BackendLandmarksController::class);

        //** All Medias Route 
        Route::get('medias', [BackendMediaController::class, 'showAllMedia']);

        //**Municipality Info Route
        Route::resource('municipality-info-admin', BackendMunicipalityInfoController::class);

        //****All Media
        Route::get('medias-admin/create/project/{project_id}', [BackendMediaController::class, 'createProject'])->name('medias-admin.create.project');
        Route::get('medias-admin/create/news/{news_id}', [BackendMediaController::class, 'createNews'])->name('medias-admin.create.news');
        Route::get('medias-admin/create/event/{event_id}', [BackendMediaController::class, 'createEvent'])->name('medias-admin.create.event');
        Route::get('medias-admin/create/landmark/{landmark_id}', [BackendMediaController::class, 'createLandmark'])->name('medias-admin.create.landmark');

        //** Profile Routes
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');
    }

);


require __DIR__ . '/auth.php';
