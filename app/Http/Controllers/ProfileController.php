<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ilan;

class ProfileController extends Controller
{
    
    public function __construct(){
        return $this->middleware('auth');
    }

    public function index()
    {   
        $user = Auth::user();
        $trans = ilan::where('user_id',$user->id)->where('ilan_türü','firma')->get();
        $load = ilan::where('user_id',$user->id)->where('ilan_türü','bireysel')->get();
        return view('profile.index',compact('user','trans','load'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        $user = User::find($id);
        
        //Needs a profile.show file
        //return view('profile.show',compact('user'));
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
