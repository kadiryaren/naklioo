<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "view file for ilan creation";//ilan.create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //get the data from the frontend,validate and then use it
        $request = "Some data";

        $data = [
            'ilan_türü' => 'nakliye',
            'ilan_basligi' => 'test ilani',
            'nereden' => 'ankara',
            'nereye' => 'istanbul',
            'arac' => 'kamyon',
            'ürün_cesit' => 'tarım',
            'ürün' => 'gübre',
            'miktar' => '2 ton',
            'fiyat' => '300 tl',
            'telefon' => '05315313131',
            'aciklama' => 'yok',
            'tarih' => '15 nisan',
        ];

        $user = Auth::user();

        $advert = $user->ilan()->create($data);

        return redirect()->route('ilan.show',$advert->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advert = ilan::find($id);
        return view('ilan.show',compact('advert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
