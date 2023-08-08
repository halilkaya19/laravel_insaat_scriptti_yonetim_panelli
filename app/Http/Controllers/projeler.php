<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\proje;
use App\Models\projekategori;
use Illuminate\Http\Request;

class projeler extends Controller
{
    public function index(){

        $projeler = proje::all();
        $projekat = projekategori::all();
        $blogalt = blog::all()->take(3);
        return view("frontend.projeler.projelerlistesi")->with([
            "projelerana" => $projeler,
            "projekategori" => $projekat,
            "blogalt" => $blogalt
        ]);
    }

    public function projedetay($proje_selflink){

        $blogalt = blog::all()->take(3);
        $proje = proje::where("proje_selflink",$proje_selflink)->first();

        return view("frontend.projeler.proje-detay")->with([
            "blogalt" => $blogalt,
           "proje" => $proje
        ]);

    }
}
