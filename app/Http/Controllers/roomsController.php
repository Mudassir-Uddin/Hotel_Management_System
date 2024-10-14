<?php

namespace App\Http\Controllers;

use App\Models\rooms;
use Illuminate\Http\Request;

class roomsController extends Controller
{
    //
    function rooms(){
        
        $rooms = rooms::all();
        return view('dashboard.rooms.index',compact('rooms'));
    }
    function insert()
    {
        return view('dashboard.rooms.insert');
    }

    function Store(Request $req)
    {

        $req->validate([
            'img' => 'required | image | mimes:png,jpg',
            'room_number' => 'required | max:5 | min:3',
            'room_type' => 'required | max:40',
            'bed_count' => 'required | max:2 | min:1',
            'price_per_night' => 'required',
            'availability_status' => 'required'
        ]);

        
        $img = $req->img;
        $imgname = $img->getClientOriginalName();
        $imgname = time() . "__" . $imgname;
        $img->move("images/Roomimages/", $imgname);

            $room = new rooms;
            $room->img = "images/Roomimages/$imgname";
            $room->room_number = $req->room_number;
            $room->room_type = $req->room_type;
            $room->bed_count = $req->bed_count;
            $room->price_per_night = $req->price_per_night;
            $room->availability_status = $req->availability_status;
            $room->save();
       
        return redirect('/Dbrooms');

    }
    function edit($id)
    {   
        $room = rooms::Where('id', $id/548548)->first();
        return view('dashboard.rooms.edit', compact('room'));
    }
    function update(Request $req, $id)
    {
        $room = rooms::find($id);
        $imgname = $room->img;
        if ($req->hasfile('img')) {
            
            $img = $req->img;
            $imgname = $img->getClientOriginalName();
            $imgname = time() . "__" . $imgname;
            $img->move("images/Roomimages/", $imgname);
            $imgname = "images/Roomimages/".$imgname;
            if($room->img){
                if(file_exists(public_path($room->img))){
                    unlink(public_path($room->img));
                }
            }
        }
            $room->img = $imgname;
            $room->room_number = $req->room_number;
            $room->room_type = $req->room_type;
            $room->bed_count = $req->bed_count;
            $room->price_per_night = $req->price_per_night;
            $room->availability_status = $req->availability_status;
            $room->save();

        return redirect('/Dbrooms');

   }
    

    function delete($id)
    {
        $st = rooms::find($id);
        if ($st) {
            if($st->img){
                if(file_exists(public_path($st->img))){
                    unlink(public_path($st->img));
                }
            }
            $st->delete();
            return redirect('/Dbrooms');
        }
        return redirect('/Dbrooms');
    }

}
