<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\hizmetlerimiz;
use App\Models\proje;
use App\Models\referans;
use App\Models\slider;
use Illuminate\Http\Request;

class homeControllers extends Controller
{
    public function index(){
        $toplamrefsay = referans::all()->count();
        $slidersay = slider::all()->count();
        $blog = blog::all()->count();
        $hizmet = hizmetlerimiz::all()->count();
        $projeler = proje::all()->take(5);
        return view("backend.home.home_page",compact('toplamrefsay','slidersay','blog','hizmet','projeler'));
    }
}
