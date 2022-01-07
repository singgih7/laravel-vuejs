<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\LevelController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BudgetController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/level', function (Request $request) {
    return $request->level();
});

Route::middleware('auth:api')->get('/budget', function (Request $request) {
    return $request->BudgetModel();
});


Route::get('ambildatalevel',  [LevelController::class, 'index']);

Route::apiResources([
    'user' => UserController::class,
    'level' => LevelController::class,
    'budget' => BudgetController::class,
]);

