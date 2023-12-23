<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\PersonalInfoModel;
use Illuminate\Support\Facades\Route;


// Route::resource('/', loginController::class);


Route::get('/', function () {
    return view('Auth/login');
});

Route::post('/', [loginController::class, 'storeUp'])->name('signUp');

Route::get('/login', [loginController::class, 'storeIn'])->name('signIn');

Route::get('/update', [loginController::class, 'updateUp'])->name('updated');
