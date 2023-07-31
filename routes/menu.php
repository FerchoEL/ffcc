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
use App\Http\Controllers\Menu\RailroadSwitchController;
use App\Http\Controllers\Menu\TrackSectionController;
use App\Http\Controllers\Menu\InspectionController;
use App\Http\Controllers\Menu\ComponentCatalogController;
use App\Http\Controllers\Menu\CardTrackController;
use App\Http\Controllers\Menu\TrackReportController;

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
Route::resource('railroadswitches',RailroadSwitchController::class)->names('railroadswitches');
Route::resource('tracksections',TrackSectionController::class)->names('tracksections');
Route::resource('inspections',InspectionController::class)->names('inspections');
Route::resource('componentcatalogs',ComponentCatalogController::class)->names('componentcatalogs');
Route::resource('cardtracks',CardTrackController::class)->names('cardtracks');
Route::resource('trackreports',TrackReportController::class)->names('trackreports');
Route::post('enviar-reporte',[InspectionController::class,'enviarReporte'])->name('enviar-reporte');

