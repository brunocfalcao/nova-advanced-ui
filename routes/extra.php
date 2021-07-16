<?php

use Illuminate\Support\Facades\Route;

Route::get('media', function () {
    dd(course()->getMedia());
});
