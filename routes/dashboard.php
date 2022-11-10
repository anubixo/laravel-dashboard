<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Blog\Controllers\BlogController;
use App\Modules\City\Controllers\CityController;
use App\Modules\Admin\Controllers\LanguageController;
use App\Modules\Admin\Controllers\DashboardController;
use App\Modules\Country\Controllers\CountryController;
use App\Modules\BlogCategory\Controllers\BlogCategoryController;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Dashboard web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('dashboard.')
    ->middleware(['set.locale'])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'home'])
            ->name('home');

        Route::get('/change-language/{language}', [DashboardController::class, 'changeLanguage'])
            ->name('change.lang');

        Route::resource('country', CountryController::class)
            ->except(['show']);

        Route::resource('city', CityController::class)
            ->except(['show']);

        Route::resource('language', LanguageController::class)
            ->only(['index']);

        Route::resource('blog-category', BlogCategoryController::class)
            ->except(['show']);

        Route::resource('blog', BlogController::class);
    });
