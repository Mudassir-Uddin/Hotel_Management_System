<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('website.index');
    }
    
    public function about(){
        return view('website.about.index');
    }
    
    public function rooms(){
        return view('website.room.index');
    }
    
    public function contactus(){
        return view('website.contactus.index');
    }
    public function UserContactsStore(Request $req){
        $req->validate([
            'name' => 'required | max:50 | min:3',
            'email' => 'required ',
            'phone' => 'required | max:13 | min:11',
            'message' => 'required',
        ]);


        $st = new contact;
        $st->name = $req->name;
        $st->email = $req->email;
        $st->phone = $req->phone;
        $st->message = $req->message;
        $st->save();

        return redirect('/');

    }
    
}
