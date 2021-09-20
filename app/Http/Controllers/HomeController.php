<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->is_admin){
            $userCount = User::count();
            $reservations = Reservation::where('status',false)->get();
            return view('admin',compact('userCount','reservations'));
        }
        else
        {
            $reservations = Reservation::where('user_id',Auth::user()->id)->get();
            return view('home',compact('reservations'));
        }
    }
}
