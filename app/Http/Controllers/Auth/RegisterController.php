<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lastName' => ['string', 'max:255'],
            'username' => ['string', 'max:255'],
            'vergi_no' => ['string', 'max:255'],
            'fiyat' => ['string', 'max:255'],
            'phone' => ['string', 'max:255'],
            'adres' => ['string', 'max:255'],
            'mahalle' => ['string', 'max:255'],
            'ilce' => ['string', 'max:255'],
            'il' => ['string', 'max:255'],
            'iller' => ['string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {   
        
        return User::create([
            'role' => $data['role'],
            'name' => $data['name'],
            'lastName' => $data['lastName'] ?? "",
            'username' => $data['username'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'vergi_no' => $data['vergi_no'] ?? "",
            'phone' => $data['phone'],
            'il' => $data['il'],
            'ilce' => $data['ilce'],
            'mahalle' => $data['mahalle'],
            'adres' => $data['adres'] ?? "",
            'iller' => $data['iller'] ?? "",
        ]);
    }
}
