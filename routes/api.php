<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\TestController;


Route::get('testroute1', [
    FirstController::class,
    'firstfunction'
]);

Route::get('objectrout', [
    FirstController::class,
    'objectReturn'
]);

Route::get('arrayrout', [
    FirstController::class,
    'arrayReturn'
]);

Route::post('conditionalrout', [
    FirstController::class,
    'conditionalstatement'
]);

Route::get('looprout', [
    FirstController::class,
    'loopstatement'
]);

Route::post('storetest', [
    TestController::class,
    'store'
]);

Route::put('updatetest/{id}', [
    TestController::class,
    'update'
]);

Route::get('alltest', [
    TestController::class,
    'index'
]);

Route::delete('deletetest/{id}', [
    TestController::class,
    'delete'
]);