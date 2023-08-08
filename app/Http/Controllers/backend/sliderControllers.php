<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use \Illuminate\Support\Str;
use Illuminate\Http\Request;

class sliderControllers extends Controller
{
    public function index(){
        $slidertüm = slider::all();
        return view("backend.slider.slider_page",compact('slidertüm'));
    }

    public function sliderEkleget(){
        return view("backend.slider.slider_ekle_page");
    }

    public function sliderEklepost(Request $request){

        $request->validate([
            "slider_baslik"=>"required"
        ]);

        $resim = "";

        if($request->hasFile('slider_resim')){
            $imagename = Str::slug($request->slider_baslik,"-").'.'.$request->file("slider_resim")->getClientOriginalExtension();
            $request->file("slider_resim")->move(public_path('/_images/slider'),$imagename);
            $resim = $imagename;
        }

        $sliderekle = new slider();
        $sliderekle->slider_baslik = $request->input('slider_baslik');
        $sliderekle->slider_altbaslik = $request->input('slider_altbaslik');
        $sliderekle->slider_resim = $resim;
        $sliderekle->slider_btn = $request->input('slider_btn');
        $yenisliderekle = $sliderekle->save();
        if($yenisliderekle){
            alert()->success('Tebrikler','Başarıyla Slider eklediniz');
            return redirect(route('admin.slider'));
        }

    }

    public function slidersil($id){
        $gelenhizmet = slider::findOrFail($id);
        @unlink(public_path('_images/slider/'.$gelenhizmet->slider_resim));
        $sil = slider::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Slider sildiniz');
            return redirect(route('admin.slider'));
        }
    }

    public function sliderguncelleget($id){
        $slidercek = slider::find($id);
        return view("backend.slider.slider_duzenle_page",compact('slidercek'));
    }

    public function sliderguncellepost(Request $request,$id){

        $request->validate([
            "slider_baslik"=>"required"
        ]);

        $resim = "";

        if($request->hasFile('slider_resim')){
            $imagename = Str::slug($request->slider_baslik,"-").'.'.$request->file("slider_resim")->getClientOriginalExtension();
            $request->file("slider_resim")->move(public_path('/_images/slider'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $request->input('eresim');
        }

        $slidergnc = slider::where("id",$id)->update(
            [
             "slider_baslik" => $request->input('slider_baslik'),
                "slider_altbaslik" => $request->input('slider_altbaslik'),
                "slider_resim" => $resim,
                "slider_btn" => $request->input('slider_btn')
            ]
         );

        if($slidergnc){
            alert()->success('Tebrikler','Başarıyla Slider Güncellediniz');
            return redirect(route('admin.slider'));
        }

    }



}
