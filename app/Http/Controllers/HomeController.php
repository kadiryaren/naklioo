<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ilan;

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
        $trans = ilan::where('ilan_türü','firma')->get();
        $load = ilan::where('ilan_türü','bireysel')->get();
        return view('home.index',compact('trans','load'));
    }
}
