<?php

use App\Http\Controllers\Menu\CarTypeController;
use App\Http\Controllers\Menu\CompanyController;
use App\Http\Controllers\Menu\EmailController;
use App\Http\Controllers\Menu\HomeController;
use App\Http\Controllers\Menu\InitialController;
use App\Http\Controllers\Menu\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Menu\RoleController;
use App\Http\Controllers\Menu\TrackController;
use App\Http\Controllers\Menu\UserController;
use App\Http\Controllers\Menu\YardController;

Route::get('', [HomeController::class, 'index'])->name('home');
Route::resource('roles',RoleController::class)->names('roles');
Route::resource('users',UserController::class)->names('users');
Route::resource('companies',CompanyController::class)->names('companies');
Route::resource('locations',LocationController::class)->names('locations');
Route::resource('yards',YardController::class)->names('yards');
Route::resource('emails',EmailController::class)->names('emails');
Route::resource('tracks',TrackController::class)->names('tracks');
Route::resource('cartypes',CarTypeController::class)->names('cartypes');
Route::resource('initials',InitialController::class)->names('initials');
