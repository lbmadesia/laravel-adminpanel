<?php

// route without auth
Route::post('login','Auth\AuthController@login');
Route::post('register','Auth\AuthController@register');
