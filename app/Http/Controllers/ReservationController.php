<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    public function form()
    {
        if (Auth::guest())
        {
            return redirect()->route('login');
        }
        else{
            return view('book');
        }       
    }
    public function reserve(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required|numeric',
            'occasion' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'people' => 'required|digits_between:0,12',

        ]);
        $reservation = new Reservation();
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->occasion = $request->occasion;
        $reservation->date =  $request->date;
        $reservation->time = $request->time;
        $reservation->people = $request->people;
        $reservation->message = $request->message;
        $reservation->user_id = Auth::user()->id;
        $reservation->status = false;
        $reservation->save();
        return redirect()->route('home');
    }
}
