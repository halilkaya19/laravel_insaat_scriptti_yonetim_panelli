<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class blogControllers extends Controller
{
    public function index(){
        $blog = blog::all();
        $blogalt = blog::all()->take(3);
        return view("frontend.blog.blog")->with(["blog"=>$blog,"blogalt"=>$blogalt]);
    }

    public function blogdetay($selflink){
        $blogdetay = blog::where("blog_selflink",$selflink)->first();
        $blogalt = blog::all()->take(3);
        if($blogdetay!=null) {
            return view("frontend.blog.blog_detay")->with(["blogdetay" => $blogdetay,"blogalt"=>$blogalt]);
        }else{
            return redirect(route('.blog'));
        }
    }
}
