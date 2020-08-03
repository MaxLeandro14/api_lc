<?php

use Illuminate\Http\Request;

Route::get('index/room', 'RoomController@index');
Route::get('index/room/all', 'RoomController@list');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
