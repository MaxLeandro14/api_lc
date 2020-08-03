<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    function index()
    {
    	return Room::orderBy('id','desc')->where('ativo', '1')->take(7)->get();
    }

    function list()
    {
    	return Room::where('ativo', '1')->get();
    }
}
