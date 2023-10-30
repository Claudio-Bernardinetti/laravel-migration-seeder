<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        // Get today's date
        $today = date("Y-m-d");
        // Get all trains departing today
        $date = Train::whereDate('departure_time', '=', $today)->get();
        
        $trains = Train::all();
        dd($trains);

        return view('welcome', compact('trains'));
    }
}