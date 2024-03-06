<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
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
}
