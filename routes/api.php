<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Chegamos até aqui' => 'SIM'];
});