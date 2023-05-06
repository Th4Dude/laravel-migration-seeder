<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\train;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class PageController extends Controller
{
    public function index(){

        $trains = train::all();
        $todaysTrains = $this->getTodaysTrains();

        return view('home', compact('trains','todaysTrains'));
      }

      private function getTodaysTrains()
      {
          return Train::whereDate('departure_time', Carbon::today())->get();
      }
}


