<?php

use Illuminate\Support\Facades\Route;

Route::get('/top/get',[\Puppyter\Tracker\Controllers\TrackerController::class, 'getTopViewed'])->name('getTop');
Route::get('/top/ip/get',[\Puppyter\Tracker\Controllers\TrackerController::class,'getTopViewedIp'])->name('getTopIp');
Route::get('/top/show', [\Puppyter\Tracker\Controllers\TrackerController::class,'show'])->name('showTop');
