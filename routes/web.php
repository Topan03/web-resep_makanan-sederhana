<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResepController;

Route::get('/', [ResepController::class, 'index']);
route::resource('reseps', ResepController::class);
