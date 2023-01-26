<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\UserController;
use App\Models\Lookups\Category;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//api/auth/register
Route::post('/register', [AuthController::class, 'register']);

Route::group(['prefix'=>'auth', 'middleware'=>'auth:sanctum'],function () {

//api/auth/login
    Route::post('/login', [AuthController::class,'login']);
//api/auth/logout
    Route::get('/logout', [AuthController::class,'logout']);
    //api/auth/user
    Route::get('/user', [AuthController::class,'user']);
    Route::resource('users', UserController::class);

});

Route::group(['prefix'=>'lookups', 'middleware'=>'auth:sanctum'],function () {
    //Route::resource('opportunities', OpportunityController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('countries', CountryController::class);
});
Route::group(['middleware'=>'auth:sanctum'],function () {
   //Opportunities
    Route::resource('opportunity', OpportunityController::class);

    //Forum
    Route::get('questions', [ForumController::class, 'index']);
    Route::post('question', [ForumController::class, 'store']);
    Route::get('question/{question}', [ForumController::class, 'show']);
    Route::put('question/{question}', [ForumController::class, 'update']);
    Route::delete('question/{question}', [ForumController::class, 'destroy']);
    //Favorite
    Route::get('favorites', [FavoriteController::class, 'index']);
    Route::post('favorite', [FavoriteController::class, 'store']);
    Route::get('favorite/{favorite}', [FavoriteController::class, 'show']);
    Route::put('favorite/{favorite}', [FavoriteController::class, 'update']);
    Route::delete('favorite/{favorite}', [FavoriteController::class, 'destroy']);
});

