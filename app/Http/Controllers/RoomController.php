<?php

namespace App\Http\Controllers;

use App\Category;
// use Illuminate\Support\Facades\DB;
use App\Http\Requests\RoomRequest;
use App\Room;
use DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function list(Request $request)
    {

    //	$this->authorize('view',Room::class);

        //	$rooms = DB::table('rooms')->paginate(2);
        $rooms = Room::paginate(2);

        return view('room.list', compact('rooms'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('room.create', compact('categories'));
    }

    public function store(RoomRequest $request)
    {
        $rooms = DB::table('rooms')->insert([
            'category_id' => $request->category,
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,

        ]);

        return redirect('/room');
    }

    public function edit($id)
    {
        $room = DB::table('rooms')->where('id', $id)->first();

        $categories = Category::all();

        return view('room.edit', compact('room', 'categories'));
    }

    public function update($id, RoomRequest $request)
    {
        $room = DB::table('rooms')->where('id', $id)->update([
            'name'        => $request->name,
            'price'       => $request->price,
            'description' => $request->description,
        ]);

        return redirect('/room');
    }

    public function delete($id)
    {
        $room = DB::table('rooms')->where('id', $id)->delete();

        return redirect('/room');
    }
}
