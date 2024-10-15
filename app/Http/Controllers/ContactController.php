<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function Contact()
    {

        $Contact = contact::all();
        return view('dashboard.Contacts.index', compact('Contact'));
    }
    function insert()
    {
        return view('dashboard.Contacts.insert');
    }

    function Store(Request $req)
    {

        $req->validate([
            'name' => 'required | max:50 | min:3',
            'email' => 'required ',
            'phone' => 'required | max:13 | min:11',
            'message' => 'required',
        ]);


        $st = new Contact;
        $st->name = $req->name;
        $st->email = $req->email;
        $st->phone = $req->phone;
        $st->message = $req->message;
        $st->save();

        return redirect('/DbContacts');

    }
    function edit($id)
    {
        $st = Contact::find($id);
        if ($st) {
            return view('dashboard.Contacts.edit', compact('st'));
        }
        return redirect('/DbContacts');

    }
    function update(Request $req, $id)
    {
        $Contact = Contact::find($id);
        $req->validate([
            'name' => 'required | max:50 | min:3',
            'email' => 'required ',
            'phone' => 'required | max:13 | min:11',
            'message' => 'required',
        ]);

        $Contact->name = $req->name;
        $Contact->email = $req->email;
        $Contact->phone = $req->phone;
        $Contact->message = $req->message;

        $Contact->save();

        return redirect('/DbContacts');
    }


    function delete($id)
    {
        $st = Contact::find($id);

        $st->delete();
        return redirect('/DbContacts');
    }

}
