<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($berapa) {
        echo 'lina punya anak ' . $berapa;
    }

    public function penerbit(){
        return view('pt');
    }
}
