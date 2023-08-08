<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\hizmetlerimiz;
use App\Models\nedediler;
use Illuminate\Http\Request;

class hizmetlerimizControllers extends Controller
{
    public function hizmetdetay($hizmetself){
        $hizmetdetay = hizmetlerimiz::where("hizmet_selflink",$hizmetself)->first();
        $blogalt = blog::all()->take(3);
        $nedediler = nedediler::all();
        if($hizmetdetay!=null) {
            return view("frontend.hizmet.hizmet_detay")->with(["hizmetdetay" => $hizmetdetay,"blogalt"=>$blogalt,"nedediler"=>$nedediler]);
        }else{
            return redirect(route('.blog'));
        }
    }
}
