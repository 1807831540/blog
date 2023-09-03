<?php

use Evan\MyWork\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::resource('my-work', Controllers\MyWorkController::class);