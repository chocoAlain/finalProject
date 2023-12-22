<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\PersonalInfoModel;
use Illuminate\Support\Facades\Route;


// Route::resource('/', loginController::class);

Route::get('/', [loginController::class, 'index'])->name('login.index');

Route::post('/', [loginController::class, 'storeIn'])->name('signIn');

Route::post('/signUp', [loginController::class, 'storeUp'])->name('signUp');

Route::resource('/student', StudentController::class);

Route::resource('/teacher', TeacherController::class);

Route::resource('/room', RoomController::class);





Route::group(['prefix' => '/dashboard'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('dashboard');
    Route::get('/home', function () {
        return view('content.Home');
    })->name('dashboard.home');
    Route::get('/feedback', function () {
        return view('content.feedback');
    })->name('dashboard.feedback');
    Route::get('/profile', function () {
        $personalInfo = PersonalInfoModel::find(230001);
        return view('content.Client.profile', ['personalInfo' => $personalInfo]);
    })->name('dashboard.profile');
    Route::get('/edit', function () {
        $personalInfo = PersonalInfoModel::find(230001);
        return view('content.Client.profileEdit', ['personalInfo' => $personalInfo]);
    })->name('dashboard.edit');
});
