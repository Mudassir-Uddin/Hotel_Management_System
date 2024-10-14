<?php

namespace App\Http\Controllers;

use App\Models\guests;
use App\Models\Payments;
use App\Models\Reservations;
use App\Models\rooms;
use App\Models\Staff;
use App\Models\Users;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    //
    public function Admindashboard(){
        $UValue = Users::count();
        $SValue = rooms::count();
        $PValue = guests::count();
        $CValue = Reservations::count();
        $PCValue = Staff::count();
        $recentRecords = Payments::where('updated_at', '>=', Carbon::now()->subDays(7))
        ->orderBy('updated_at', 'desc')
        ->get();
        $recentReservation = Reservations::where('updated_at', '>=', Carbon::now()->subDays(7))
        ->orderBy('updated_at', 'desc')
        ->get();
        // $recentTechnology = Technologie::where('updated_at', '>=', Carbon::now()->subDays(30))
        // ->orderBy('updated_at', 'desc')
        // ->get();
        return view('dashboard.index',compact('PCValue','SValue','CValue','PValue','UValue','recentRecords','recentReservation'));
    
    }
}
