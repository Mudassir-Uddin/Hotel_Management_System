<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use App\Models\Reservations;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    function payments(){
        
        $payments = Payments::all();
        return view('dashboard.payments.index',compact('payments'));
    }
    function insert()
    {
        $ReservationId = Reservations::all();
        $payments = payments::all();
        return view('dashboard.payments.insert',compact('ReservationId','payments'));
    }

    function Store(Request $req)
    {

        $req->validate([
            'reservation_id' => 'required',
            'payment_method' => 'required',
            'amount_paid' => 'required'
        ]);

            $payment = new payments;
            $payment->reservation_id = $req->reservation_id;
            $payment->payment_method = $req->payment_method;
            $payment->amount_paid = $req->amount_paid;
            $payment->save();
       
        return redirect('/Dbpayments');

    }
    function edit($id)
    {
        $st =payments::find($id);
        $ReservationId = Reservations::all();
        $payment = payments::Where('id', $id/548548)->first();
        if ($st) {
            // return view('dashboard.Project-Clients.edit', compact('st','Projects','Clients'));
        }
        // return redirect('/');
        return view('dashboard.payments.edit', compact('st','ReservationId','payment'));

    }
    function update(Request $req, $id)
    {
        $payment = payments::find($id);
        
            $payment->reservation_id = $req->reservation_id;
            $payment->payment_method = $req->payment_method;
            $payment->amount_paid = $req->amount_paid;
            $payment->save();

        return redirect('/Dbpayments');

   }
    

    function delete($id)
    {
        $st = payments::find($id);
        $st->delete();
        return redirect('/Dbpayments');
    }
}
