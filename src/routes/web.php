<?php

use Cirkle\Contact\CustomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get(env('CUSTOM_URI') !== '' ? env('CUSTOM_URI') : 'aaa', function (Request $request) {
    return 'contact page is ready';
});




