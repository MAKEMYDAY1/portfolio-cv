<?php

use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Experience;

Route::get('/', function () {
    return view('index');
});
