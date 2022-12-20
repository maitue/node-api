<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Unit\UnitController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;
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
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']); 
});

Route::group([
    'middleware' => 'auth.jwt',
    'prefix'=> 'user'
], function(){
	Route::resource('/units', UnitController::class);
});

Route::group([
    'middleware' => 'auth.jwt',
], function(){
	Route::resource('/units', UnitController::class);
	Route::resource('/user', UserController::class);
    Route::resource('/questions',QuestionController::class);
    Route::resource('/answers', AnswerController::class);
});