<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class SemuaController extends Controller
{
    public function beranda(){
        return view('beranda');
    }

    public function tentang(){
        return view('tentang');
    }

    public function menu(){
        return view('menu');
    }

    public function contact(){
        return view('contact');
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|min:6|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:12|max:13',
            'password' => 'required|min:6|max:8'
        ]);
        User::create($validatedData);

        // $request->session()->flash('success', 'Daftar Akun Berhasil!! Selanjutnya Login');

        return redirect('/login')->with('success', 'Daftar Akun Berhasil!! Selanjutnya Login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        dd('berhasil login');
    }

}
