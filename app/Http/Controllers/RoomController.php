<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;


class RoomController extends Controller
{
	public function list(Request $request){

		$rooms = DB::table('rooms')->paginate(2);

		return view('room.list',compact('rooms'));
	}

	public function create(){

		return view('room.create');
	}

	public function store(Request $request){

		$rooms = DB::table('rooms')->insert([
			'name' => $request->name,
			'price' => $request->price,
			'description' => $request->description,

		]);

		return redirect('/room');
	}

	public function edit($id){

		$room = DB::table('rooms')->where('id',$id)->first();

		return view('room.edit',compact('room'));
	}

	public function update($id, Request $request){
		$room = DB::table('rooms')->where('id',$id)->update([
			'name' => $request->name,
			'price' => $request->price,
			'description' => $request->description,
		]);

		return redirect('/room');
	}

	public function delete($id){
		$room = DB::table('rooms')->where('id',$id)->delete();

		return redirect('/room');
	}
}
