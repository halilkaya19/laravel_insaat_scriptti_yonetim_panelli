<?php

namespace App\Http\Controllers;

use App\Models\archiments;
use App\Models\blog;
use App\Models\hizmetlerimiz;
use App\Models\nedediler;
use App\Models\proje;
use App\Models\projekategori;
use App\Models\referans;
use App\Models\slider;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;

class homepageControllers extends Controller
{
    public function index(){

            $hizmet = hizmetlerimiz::all()->take(3);
            $nedediler = nedediler::all();
            $ref = referans::all();
            $slider = slider::all();
            $arc  = archiments::find(1);
            $blogalt = blog::all()->take(3);
            $projekat = projekategori::all();
            $projeler = proje::all();

            return view("frontend.anasayfa.index")->with(
                [
                 "arc"=>$arc,
                 "slider"=>$slider,
                 "hizmet"=>$hizmet,
                 "nedediler"=>$nedediler,
                 "ref"=>$ref,
                 "blogalt"=>$blogalt,
                 "projekategori" => $projekat,
                 "projelerana" => $projeler
                ]
            );
    }
}
