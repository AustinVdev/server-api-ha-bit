<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ActivityDifficultyController;
use App\Http\Controllers\ActivityTypeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThemeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$versionApi = config('app.api_version');



Route::group([
    'prefix'     => "/$versionApi",
], function () {

    Route::controller(AuthController::class)->prefix('/auth')->group(function () {
        Route::post('/login', 'loginUser')->name('login');;
        Route::post('/register', 'createUser')->name('register');
    });

    Route::middleware('auth:sanctum')->group(function () {
        Route::controller(AchievementController::class)->prefix('/achievements')->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
        });

        Route::controller(ActivityDifficultyController::class)->prefix('/activity-difficulties')->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
        });

        Route::controller(ActivityTypeController::class)->prefix('/activity-types')->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
        });

        Route::controller(ThemeController::class)->prefix('/themes')->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
        });
    });
});
