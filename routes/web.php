<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Home;
use App\Livewire\MyProfile;
use App\Livewire\Auth\Login;
use App\Livewire\Roles\RoleEdit;
use App\Livewire\Users\UserEdit;
use App\Livewire\Roles\RoleIndex;
use App\Livewire\Users\UserIndex;
use App\Livewire\Roles\RoleCreate;
use App\Livewire\Users\UserCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Hospitals\HospitalEdit;
use App\Livewire\Hospitals\HospitalShow;
use App\Livewire\Hospitals\HospitalIndex;
use App\Livewire\Hospitals\HospitalCreate;
use App\Livewire\Users\Surveyors\SurveyorEdit;
use App\Livewire\Users\Surveyors\SurveyorIndex;
use App\Livewire\Users\Surveyors\SurveyorCreate;
use App\Livewire\Accreditation\AccreditationShow;
use App\Livewire\Accreditation\AccreditationIndex;
use App\Livewire\Accreditation\AccreditationCreate;
use App\Livewire\Accreditation\Bab\AccreditationBabShow;
use App\Livewire\Accreditation\Element\AccreditationElementAddGrade;
use App\Livewire\Accreditation\Standard\AccreditationStandardShow;
use App\Livewire\Public\HomeIndex;

// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', HomeIndex::class)->name('home');
Route::get('/signin', Login::class)->name('signin');
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
    Route::get('hospitals/detail/{hospitalId}', HospitalShow::class)->name('hospitals.show');

    // Akreditasi
    Route::get('accreditations', AccreditationIndex::class)->name('accreditations.index');
    Route::get('accreditations/create', AccreditationCreate::class)->name('accreditations.create');
    Route::get('accreditations/detail/{acc_id}', AccreditationShow::class)->name('accreditations.show');
    Route::get('accreditations/detail/{acc_id}/bab/{bab_id}/', AccreditationBabShow::class)->name('accreditations.bab.show');
    Route::get('accreditations/detail/{acc_id}/bab/{bab_id}/standard/{standard_id}', AccreditationStandardShow::class)->name('accreditations.standard.show');
    Route::get('accreditations/detail/{acc_id}/bab/{bab_id}/standard/{standard_id}/element/{element_id}/add-grade', AccreditationElementAddGrade::class)->name('accreditations.element.add-grade');

    Route::get('profile', MyProfile::class)->name('profile.show');
    Route::put('profile', MyProfile::class)->name('profile.update');
});
