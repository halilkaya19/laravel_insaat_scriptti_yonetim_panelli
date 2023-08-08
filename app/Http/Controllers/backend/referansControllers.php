<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\referans;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class referansControllers extends Controller
{
    public function index(){
        $referanstüm = referans::all();
        return view("backend.referanslar.referans_page",compact('referanstüm'));
    }

    public function referansekleget(){
        return view('backend.referanslar.referans_ekle_page');
    }

    public function referanseklepost(Request $request){

        $request->validate([
            "referans_ad"=>"required"
        ]);

        $resim = "";

        if($request->hasFile('referans_resim')){
            $imagename = Str::slug($request->referans_ad,"-").'.'.$request->file("referans_resim")->getClientOriginalExtension();
            $request->file("referans_resim")->move(public_path('/_images/referans'),$imagename);
            $resim = $imagename;
        }

        $refref = new referans();
        $refref->referans_ad = $request->input('referans_ad');
        $refref->referans_resim = $resim;
        $refrefeke = $refref->save();
        if($refrefeke){
            alert()->success('Tebrikler','Başarıyla Referans Eklendiniz');
            return redirect(route('admin.ref'));
        }

    }

    public function reftsil($id){
        $gelenhizmet = referans::findOrFail($id);
        @unlink(public_path('_images/referans/'.$gelenhizmet->referans_resim));
        $sil = referans::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Referansı sildiniz');
            return redirect(route('admin.ref'));
        }
    }


    public function referansguncelleget($id){
        $refcek = referans::find($id);
        return view("backend.referanslar.referans_duzenle_page",compact('refcek'));
    }

    public function referansguncellepost(Request $request,$id){

        $request->validate([
            "referans_ad"=>"required"
        ]);

        $resim = "";

        if($request->hasFile('referans_resim')){
            $imagename = Str::slug($request->referans_ad,"-").'.'.$request->file("referans_resim")->getClientOriginalExtension();
            $request->file("referans_resim")->move(public_path('/_images/referans'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $request->input('eresim');
        }

        $hizmetgnc = referans::where("id",$id)->update(
            [
                "referans_ad" => $request->input('referans_ad'),
                "referans_resim" => $resim
            ]
        );
        if($hizmetgnc){
            alert()->success('Tebrikler','Başarıyla Güncellediniz Güncellediniz');
            return redirect(route('admin.ref'));
        }
    }

}
