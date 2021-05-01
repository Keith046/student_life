<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\HousingController;
use App\Http\Controllers\TutoringController;
use App\Http\Controllers\TutorSessionController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\TransportationController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.welcome');
});

Auth::routes();


Route::get('/student', [App\Http\Controllers\UserController::class, 'index'])->name('student');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/landlord', [App\Http\Controllers\LandlordController::class, 'index'])->name('landlord');
Route::get('/vendor', [App\Http\Controllers\VendorsController::class, 'index'])->name('vendor');
Route::get('/landlord/maps', [App\Http\Controllers\MapsController::class, 'index'])->name('maps');
Route::get('/student/housing/maps', [App\Http\Controllers\MapsController::class, 'housing_map'])->name('maps');
Route::get('/student/food_establishments/maps', [App\Http\Controllers\MapsController::class, 'vendor_map'])->name('maps');
Route::get('/search', [App\Http\Controllers\AdminController::class, 'search'])->name('search');
Route::get('/student/search', [App\Http\Controllers\SearchController::class, 'search_housing'])->name('search');
Route::get('/student/sort', [App\Http\Controllers\SearchController::class, 'sort_housing'])->name('sort');
Route::get('/admin/sort', [App\Http\Controllers\SearchController::class, 'sort_user'])->name('sort');
Route::get('/student/housing', [App\Http\Controllers\StudentController::class, 'housing'])->name('housing');
Route::resource('accounts', AccountsController::class);
Route::resource('profile', ProfileController::class);
Route::resource('apartments', HousingController::class);
Route::resource('appointments', AppointmentsController::class);
Route::resource('tutor', TutoringController::class);
Route::resource('tutoring_session', TutorSessionController::class);
Route::resource('clubs', ClubsController::class);
Route::resource('transportation', TransportationController::class);