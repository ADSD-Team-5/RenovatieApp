<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }


    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'voornaam' => 'required|max:255',
            'achternaam' => 'required|max:255',
            'email' => 'required|email|confirmed|max:255',
            'postcode' =>'required|max:7',
            'huisnummer' => "required|max:255",
            'straat' =>'required|max:255',
            'woonplaats' =>'required|max:255',
            'telefoon' =>'required|max:255',
            'password' => 'required|confirmed',
            'clearance' => 'required'
        ]);

        //store user
        User::create([
            'voornaam' => $request->voornaam,
            'achternaam' => $request->achternaam,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'huisnummer' => $request->huisnummer,
            'straat' => $request->straat,
            'woonplaats' => $request->woonplaats,
            'mobiel' => $request->mobiel,
            'telefoon' => $request->telefoon,
            'password' => Hash::make($request->password),
            'clearance'=> $request->clearance,
        ]);

        //sign the user in
        auth()->attempt($request->only('email', 'password'));

        //redirect
        return redirect()->route('dashboard');
    }
}
