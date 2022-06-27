<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Auth::routes();
Route::middleware('auth')->group(function(){
   Route::get('/',[PageController::class,'home']);
});

