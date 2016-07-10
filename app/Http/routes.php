<?php

use App\Events\UserHasRegistered;

Route::get('/', function () {
    return view('welcome');
});

Route::get('broadcast', 'BroadcastController@getUsers');
