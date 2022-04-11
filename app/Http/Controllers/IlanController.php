<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ilan;

class IlanController extends Controller
{
    
    public function __construct(){

        return $this->middleware('auth');
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('ilan.create');
    }

    
    public function store(Request $request)
    {   

       
        //get the data from the frontend,validate and then use it
        $data = $request->validate([
            'ilan_türü' => ['required', 'string', 'max:255'], 
            'ilan_basligi' => ['required', 'string', 'max:255'],
            'nereden' => ['required', 'string', 'max:255'],
            'nereye' => ['required', 'string', 'max:255'],
            'arac' => ['string', 'max:255'],
            'ürün_cesit' => ['string', 'max:255'],
            'ürün' => ['string', 'max:255'],
            'miktar' => ['string', 'max:255'],
            'fiyat' =>  ['string', 'max:255'],
            'telefon' => ['string', 'max:255'],
            'aciklama' => ['string', 'max:255'],
            'tarih' =>  ''
        ]);

        
        $user = Auth::user();

        $advert = $user->ilan()->create($data);

        return redirect()->route('ilan.show',$advert->id);
        
    }

   
    public function show($id)
    {
        $advert = ilan::find($id);
        return view('ilan.show',compact('advert'));
    }

    
    public function edit($id)
    {   
        $advert = ilan::find($id);
        return view('ilan.edit',compact('advert'));
    }

    
    public function update(Request $request, $id)
    {   
        
        $data = $request->validate([
            'ilan_türü' => ['string', 'max:255'], 
            'ilan_basligi' => ['max:255'],
            'nereden' => ['string', 'max:255'],
            'nereye' => ['string', 'max:255'],
            'arac' => ['string', 'max:255'],
            'ürün_cesit' => ['string', 'max:255'],
            'ürün' => ['string', 'max:255'],
            'miktar' => ['string', 'max:255'],
            'fiyat' =>  ['string', 'max:255'],
            'telefon' => ['string', 'max:255'],
            'aciklama' => ['string', 'max:255'],
            'tarih' =>  ''
        ]);
        
        $user = Auth::user();

        $advert = ilan::find($id);
        
        $advert->update([
            'ilan_türü' => $data['ilan_türü'] ?? $advert->ilan_türü, 
            'ilan_basligi' => $data['ilan_basligi'] ?? $advert->ilan_basligi,
            'nereden' => $data['nereden'] ?? $advert->nereden,
            'nereye' => $data['nereye'] ?? $advert->nereye,
            'arac' => $data['arac'] ?? $advert->arac,
            'ürün_cesit' => $data['ürün_cesit'] ?? $advert->ürün_cesidi,
            'ürün' => $data['ürün'] ?? $advert->ürün,
            'miktar' => $data['miktar'] ?? $advert->miktar,
            'fiyat' =>  $data['fiyat'] ?? $advert->fiyat,
            'telefon' => $data['telefon'] ?? $advert->telefon,
            'aciklama' => $data['aciklama']?? $advert->aciklama,
            'tarih' =>  $data['tarih'] ?? $advert->tarih,
        ]);

        $advert->save();

        return view('profile');
    }

    
    public function destroy($id)
    {
        ilan::find($id)->delete();

        return redirect()->route('profile');

    }
}
