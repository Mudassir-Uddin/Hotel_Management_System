<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function Admindashboard(){
        return view('dashboard.index');
    }
}
