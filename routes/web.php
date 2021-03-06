<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Section\SectionOneController;
use App\Http\Controllers\Section\SectionTwoController;

Route::get('/', [HomeController::class, 'index']);
Route::get('gitPush', [HomeController::class, 'gitPush']);
Route::get('heroku', [HomeController::class, 'heroku']);

// SECTION ONE
Route::get('installation', [SectionOneController::class, 'installation']); //1
Route::get('installation-from-git', [SectionOneController::class, 'installationFromGit']); //2
Route::get('model', [SectionOneController::class, 'model']); //3
Route::get('routes-and-views', [SectionOneController::class, 'routesAndViews']); //4
Route::get('route', [SectionOneController::class, 'route']); //5
Route::get('views', [SectionOneController::class, 'views']); //6
Route::get('controller', [SectionOneController::class, 'controller']); //7
Route::get('layout', [SectionOneController::class, 'layout']); //8
Route::get('middleware', [SectionOneController::class, 'middlewaref']); //9

// SECTION TWO
Route::get('crud', [SectionTwoController::class, 'crud']);


// POST CONTACT
Route::get('form', [HomeController::class, 'contactform'])->name('form');
Route::post('form', [HomeController::class, 'formData'])->name('form');
