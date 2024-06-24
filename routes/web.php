<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiraganaController;
use App\Http\Controllers\API\APIController;
Route::get('/',[APIController::class,'CreateApi']);
Route::get('hiragana',[HiraganaController::class,'ShowHiragana']);

