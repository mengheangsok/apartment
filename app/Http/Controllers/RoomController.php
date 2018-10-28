<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
	public function list(Request $request){
		$name = 'Sok Mengheang';
		$age = 26;
		$link = "<a href='http://cnn.com'>Go To CNN</a>";
		$link_2 = "<a href='http://cnn.com'>Go To CNN</a>";

		return view('room.list',compact('name','age','link','link_2'));
	}
}
