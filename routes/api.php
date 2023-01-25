<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\UserController;
use App\Models\Lookups\Category;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    //Here we will define all the routes for the au
    //api/auth/register
    Route::post('/register', [AuthController::class, 'register']);
//api/auth/login
    Route::post('/login', [AuthController::class,'login']);
//api/auth/logout
    Route::get('/logout', [AuthController::class,'logout'])->middleware('auth:sanctum');
    //api/auth/user
    Route::get('/user', [AuthController::class,'user'])->middleware('auth:sanctum');
    Route::resource('users', UserController::class)->middleware('auth:sanctum');

});
//api resources
//api/store
//Route::post('/store', [OpportunityController::class,'store']);//->middleware('auth:sanctum');
//api/opportunities
//Route::get('/opportunities', [OpportunityController::class,'index']);//->middleware('auth:sanctum');
//api/opportunities/{id}
//Route::get('/opportunities/{id}', [OpportunityController::class,'show']);//->middleware('auth:sanctum');


Route::prefix('lookups')->group(function () {
    Route::resource('opportunities', OpportunityController::class)->middleware('auth:sanctum');
    Route::resource('categories', CategoryController::class)->middleware('auth:sanctum');
    Route::resource('countries', CountryController::class)->middleware('auth:sanctum');
    //Route::resource('opportunity/', OpportunityController::class);

});

