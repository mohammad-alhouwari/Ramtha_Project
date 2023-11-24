<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProjectController as BackendProjectController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Backend\MediaController as BackendMediaController;
use App\Http\Controllers\Backend\ComplainController as BackendComplainController;
use App\Http\Controllers\Backend\InvestmentController as BackendInvestmentController;
use App\Http\Controllers\Backend\NewController as BackendNewController;
use App\Http\Controllers\Backend\SuggestionController as BackendSuggestionController;
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

        // Suggestion Route
        Route::resource('suggestions-admin', BackendSuggestionController::class);

        //Investment opportunities Route
        Route::resource('investments-admin', BackendInvestmentController::class);

        // News Route
        Route::resource('news-admin', BackendNewController::class);

        //Admins Route
        Route::resource('admin-users', BackendUserController::class);

        // Profile Routes
        Route::get('/profile', [AdminController::class, 'adminProfile'])->name('profile');
        Route::post('/profile-update/{id}', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/profile/change-password', [AdminController::class, 'changePassword'])->name('profile.change-password');
        Route::post('/profile/update-password/{id}', [AdminController::class, 'updatePassword'])->name('profile.update-password');
    }
);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
