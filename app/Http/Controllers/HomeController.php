<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms; //cant be plural Rooms = Room

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
        $rooms = Rooms::all();
        return view('home', ['rooms' => $rooms]);
    }
}
