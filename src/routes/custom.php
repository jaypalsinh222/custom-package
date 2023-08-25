<?php

use Cirkle\Contact\CustomController;
use Illuminate\Support\Facades\Route;

Route::get('add/{a}/{b}',[CustomController::class,'add']);
Route::get('sub/{a}/{b}',[CustomController::class,'sub']);
