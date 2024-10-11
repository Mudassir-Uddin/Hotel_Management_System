<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    //
    function Staff(){
        
        $Staff = Staff::all();
        return view('dashboard.Staff.index',compact('Staff'));
        
    }
    function insert()
    {
        return view('dashboard.Staff.insert');
    }

    function Store(Request $req)
    {

        $req->validate([
            'name' => 'required | max:50 | min:3',
            'email' => 'required | max:40',
            'phone_number' => 'required | max:15 | min:11',
            'role' => 'required',
            'salary' => 'required',
            'date_of_joining' => 'required'
        ]);

            $Staff = new Staff;
            $Staff->name = $req->name;
            $Staff->email = $req->email;
            $Staff->phone_number = $req->phone_number;
            $Staff->role = $req->role;
            $Staff->salary = $req->salary;
            $Staff->date_of_joining = $req->date_of_joining;
            $Staff->save();
       
        return redirect('/Dbstaffs');

    }
    function edit($id)
    {
        $Staff = Staff::Where('id', $id/548548)->first();
        return view('dashboard.Staff.edit', compact('Staff'));
    }
    function update(Request $req, $id)
    {
        $Staff = Staff::find($id);
        
        $Staff->name = $req->name;
        $Staff->email = $req->email;
        $Staff->phone_number = $req->phone_number;
        $Staff->role = $req->role;
        $Staff->salary = $req->salary;
        $Staff->date_of_joining = $req->date_of_joining;
        $Staff->save();

        return redirect('/Dbstaffs');

   }
    

    function delete($id)
    {
        $st = Staff::find($id);
        $st->delete();
        return redirect('/Dbstaffs');
    }

}
