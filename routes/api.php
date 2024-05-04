<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;


Route::get('testroute1', [
    FirstController::class,
    'firstfunction'
]);
