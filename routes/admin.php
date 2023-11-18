<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ProjectController as BackendProjectController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NewController as BackendNewController;

/*-----------------------------Marah Routes-----------------------------*/

Route::prefix('admin')->middleware('auth')->group(
    function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        //Projects Route
        Route::resource('projects-admin', BackendProjectController::class);
        //Admins Route
        Route::resource('admin-users', BackendUserController::class);
        Route::resource('news-admin', BackendNewController::class);
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
