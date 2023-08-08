<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class iletisimControllers extends Controller
{
    public function index(){
        $blogalt = blog::all()->take(3);
        return view("frontend.iletisim.iletisim")->with("blogalt",$blogalt);
    }
}
