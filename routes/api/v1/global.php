<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Controllers\Api\V1\User\ParlourBookingController;

Route::controller(SettingController::class)->group(function(){
    Route::get("basic-settings","basicSettings");
    Route::get("parlour-list","parlourList");
    Route::get("schedule-service","scheduleService");
    Route::post("search-parlour","searchParlour");
    
});
