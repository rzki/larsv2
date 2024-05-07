<?php

use App\Livewire\Home;
use App\Livewire\MyProfile;
use App\Livewire\Auth\Login;
use App\Livewire\Hospitals\HospitalCreate;
use App\Livewire\Hospitals\HospitalEdit;
use App\Livewire\Hospitals\HospitalIndex;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Users\UserEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserIndex;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Users\UserCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Users\Surveyors\SurveyorEdit;
use App\Livewire\Users\Surveyors\SurveyorIndex;
use App\Livewire\Users\Surveyors\SurveyorCreate;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', Login::class)->name('login');
Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Home::class)->name('home');

    // Users
    Route::get('users', UserIndex::class)->name('users.index');
    Route::get('users/create', UserCreate::class)->name('users.create');
    Route::get('users/edit/{userId}', UserEdit::class)->name('users.edit');

    // Surveyors
    Route::get('users/surveyors', SurveyorIndex::class)->name('surveyors.index');
    Route::get('users/surveyors/create', SurveyorCreate::class)->name('surveyors.create');
    Route::get('users/surveyors/edit/{surveyorId}', SurveyorEdit::class)->name('surveyors.edit');

    // Roles
    Route::get('roles', RoleIndex::class)->name('roles.index');
    Route::get('roles/create', RoleCreate::class)->name('roles.create');
    Route::get('roles/edit/{roleId}', RoleEdit::class)->name('roles.edit');

    // Hospitals
    Route::get('hospitals', HospitalIndex::class)->name('hospitals.index');
    Route::get('hospitals/create', HospitalCreate::class)->name('hospitals.create');
    Route::get('hospitals/edit/{hospitalId}', HospitalEdit::class)->name('hospitals.edit');

    Route::get('profile', MyProfile::class)->name('profile.show');
    Route::put('profile', MyProfile::class)->name('profile.update');
});
