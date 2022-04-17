<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ilan;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $trans = ilan::where('ilan_türü','firma')->get();
        $load = ilan::where('ilan_türü','bireysel')->get();
        return view('home.index',compact('trans','load'));
    }

    public function filter(Request $request){
        //dd($request);
        $ilans = ilan::when($request->get('nereden'), function ($query, $nereden) {
            $query->where('nereden', $nereden);
        })->when($request->get('cesit'), function ($query, $cesit) {
            $query->where('ürün_cesit', $cesit);
        })
        ->when($request->get('nereye'), function ($query, $nereye) {
            $query->where('nereye', $nereye);
        })
        ->when($request->get('kapak'), function ($query, $kapak) {
            $query->where('kapak', $kapak);
        })
        ->when($request->get('tarih'), function ($query, $tarih) {
            $query->where('tarih', $tarih);
        })
        ->when($request->get('ton'), function ($query, $ton) {
            $query->where('miktar', $ton);
        })
        ->when($request->get('kasa'), function ($query, $kasa) {
            $query->where('kasa', $kasa);
        })
        ->when($request->get('arac'), function ($query, $arac) {
            $query->where('arac', $arac);
        })
        ->get();

        $trans = $ilans->where('ilan_türü','firma') ;
        $load = $ilans->where('ilan_türü','bireysel') ;
        //dd($trans,$load);
        return view('home.index',compact('trans','load'));
    }
}
