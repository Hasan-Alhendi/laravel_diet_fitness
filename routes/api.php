<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\AuthUserController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\Diet\DietController;
use App\Http\Controllers\Api\Meal\MealController;
use App\Http\Controllers\Api\Admin\AuthAdminController;



//Route User

Route::group(['prefix' => 'user','namespace' => 'User'],function(){
    Route::post('register',[UserController::class,'store']);
    Route::put('personal-information/{id}',[UserController::class,'update']);
    Route::delete('delete/{id}',[UserController::class,'destroy']);
    Route::post('login',[AuthUserController::class,'login']);
    Route::post('logout',[AuthUserController::class,'logout']) -> middleware(['auth.guard:user-api']);
});

//Route Admin

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function(){
    Route::post('login',[AuthAdminController::class,'login']);
    Route::post('logout',[AuthAdminController::class,'logout']) -> middleware(['auth.guard:admin-api']);
    Route::delete('delete-user/{id}',[UserController::class,'destroy']);
});

################################ Begin one To Many RelationShip #################################

    Route::get('diet/{diet_id}',[DietController::class,'show']);
    Route::get('meal/{meal_id}',[MealController::class,'show']);
    Route::post('diet/store',[DietController::class,'store']);

################################ End one To Many RelationShip ###################################
