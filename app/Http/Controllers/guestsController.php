<?php

namespace App\Http\Controllers;

use App\Models\guests;
use Illuminate\Http\Request;

class guestsController extends Controller
{
    //
    function guests(){
        
        $guests = guests::all();
        return view('dashboard.guests.index',compact('guests'));
    }
    function insert()
    {
        return view('dashboard.guests.insert');
    }

    function Store(Request $req)
    {

        $req->validate([
            'name' => 'required | max:50 | min:3',
            'email' => 'required | max:40',
            'phone' => 'required | max:15 | min:11',
            'address' => 'required',
        ]);

            $guest = new guests;
            $guest->name = $req->name;
            $guest->email = $req->email;
            $guest->phone = $req->phone;
            $guest->address = $req->address;
            $guest->age = $req->age;
            $guest->save();
       
        return redirect('/Dbguests');

    }
    function edit($id)
    {
        $guest = guests::Where('id', $id/548548)->first();
        return view('dashboard.guests.edit', compact('guest'));
    }
    function update(Request $req, $id)
    {
        $guest = guests::find($id);
        
        $guest->name = $req->name;
        $guest->email = $req->email;
        $guest->phone = $req->phone;
        $guest->address = $req->address;
        $guest->age= $req->age;
        $guest->save();

        return redirect('/Dbguests');

   }
    

    function delete($id)
    {
        $st = guests::find($id);
        $st->delete();
        return redirect('/Dbguests');
    }

}
