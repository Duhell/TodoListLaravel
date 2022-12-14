<?php

use Illuminate\Support\Facades\Route;
Route::get("/","TaskController@index");
Route::resource('/task', 'TaskController');