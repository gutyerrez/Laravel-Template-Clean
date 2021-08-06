<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Show current API Version
Route::get('/', function () {
    return [
        'Vanish API Version' => '0.1-ALPHA'
    ];
});
