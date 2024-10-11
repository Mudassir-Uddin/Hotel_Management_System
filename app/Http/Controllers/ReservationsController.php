<?php

namespace App\Http\Controllers;

use App\Models\guests;
use App\Models\Reservations;
use App\Models\rooms;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    //
    function reservations(){
        
        $reservations = Reservations::all();
        return view('dashboard.reservations.index',compact('reservations'));
    }
    function insert()
    {
        $GuestId = guests::all();
        $RoomId = rooms::all();
        $reservation = reservations::all();
        $reservations = reservations::find('check_in_date' ,'check_in_date' );
        return view('dashboard.reservations.insert',compact('GuestId','RoomId','reservations','reservation'));
    }

    function Store(Request $req)
    {

        $req->validate([
            'guest_id' => 'required',
            'room_id' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'total_amount' => 'required',
            'status' => 'required'
        ]);

            $reservation = new reservations;
            $reservation->guest_id = $req->guest_id;
            $reservation->room_id = $req->room_id;
            $reservation->check_in_date = $req->check_in_date;
            $reservation->check_out_date = $req->check_out_date;
            $reservation->total_amount = $req->total_amount;
            $reservation->status = $req->status;
            $reservation->save();
       
        return redirect('/Dbreservations');

    }
    function edit($id)
    {
        $st =Reservations::find($id);
        $GuestId = guests::all();
        $RoomId = rooms::all();
        $reservation = reservations::Where('id', $id/548548)->first();
        if ($st) {
            // return view('dashboard.Project-Clients.edit', compact('st','Projects','Clients'));
        }
        // return redirect('/');
        return view('dashboard.reservations.edit', compact('st','GuestId','RoomId','reservation'));

    }
    function update(Request $req, $id)
    {
        $reservation = reservations::find($id);
        
            $reservation->guest_id = $req->guest_id;
            $reservation->room_id = $req->room_id;
            $reservation->check_in_date = $req->check_in_date;
            $reservation->check_out_date = $req->check_out_date;
            $reservation->total_amount = $req->total_amount;
            $reservation->status = $req->status;
            $reservation->save();

        return redirect('/Dbreservations');

   }
    

    function delete($id)
    {
        $st = reservations::find($id);
        $st->delete();
        return redirect('/Dbreservations');
    }

}
