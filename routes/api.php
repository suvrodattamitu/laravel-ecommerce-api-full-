<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('categories')->group(function(){
    Route::get('/',  'CategoryController@index');
    Route::post('/', 'CategoryController@store');
});

Route::prefix('sub-categories')->group(function(){
    Route::get('/',  'SubcategoryController@index');
    Route::post('/', 'SubcategoryController@store');
});

Route::prefix('products')->group(function(){
    Route::get('/',  'ProductController@index');
    Route::get('/{slug}',  'ProductController@view');

//    Route::post('/', 'SubcategoryController@store');
});

Route::post('/register', 'AuthController@register');

Route::group([
    'middleware' => 'api',
    //'prefix' => 'auth'
], function ($router) {
    Route::post('/login', 'AuthController@login');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::post('/me', 'AuthController@me');
});