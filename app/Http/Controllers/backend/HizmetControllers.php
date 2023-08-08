<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\hizmetlerimiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HizmetControllers extends Controller
{
    public function index(){
        $hizmettüm = hizmetlerimiz::all();
        return view("backend.hizmet.hizmet_page",compact('hizmettüm'));
    }

    public function hizmetekleget(){
        return view('backend.hizmet.hizmet_ekle_page');
    }

    public function hizmeteklepost(Request $request){

        $request->validate([
           "hizmet_baslik"=>"required",
           "hizmet_icerik" => "required"
        ]);

        $resim = "";

        if($request->hasFile('hizmet_resim')){
            $imagename = Str::slug($request->hizmet_baslik,"-").'.'.$request->file("hizmet_resim")->getClientOriginalExtension();
            $request->file("hizmet_resim")->move(public_path('/_images/hizmet'),$imagename);
            $resim = $imagename;
        }

        $hizmetekle = new hizmetlerimiz();
        $hizmetekle->hizmet_baslik = $request->input('hizmet_baslik');
        $hizmetekle->hizmet_icerik = $request->input('hizmet_icerik');
        $hizmetekle->hizmet_resim = $resim;
        $hizmetekle->hizmet_selflink = Str::slug($request->input('hizmet_baslik'),'-');
        $yeniekle = $hizmetekle->save();
        if($yeniekle){
            alert()->success('Tebrikler','Başarıyla Yeni Hizmet Eklediniz');
            return redirect(route('admin.hizmet'));
        }

    }

    public function hizmetsil($id){
        $gelenhizmet = hizmetlerimiz::findOrFail($id);
        @unlink(public_path('_images/hizmet/'.$gelenhizmet->hizmet_resim));
        $sil = hizmetlerimiz::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Hizmet Sildiniz');
            return redirect(route('admin.hizmet'));
        }
    }

    public function hizmetgncget($id){
        $hizmetcek = hizmetlerimiz::find($id);
        return view("backend.hizmet.hizmet_duzenle_page",compact('hizmetcek'));
    }

    public function hizmetgncpost(Request $request,$id){

        $request->validate([
            "hizmet_baslik"=>"required",
            "hizmet_icerik" => "required"
        ]);

        $resim = "";

        if($request->hasFile('hizmet_resim')){
            $imagename = Str::slug($request->hizmet_baslik,"-").'.'.$request->file("hizmet_resim")->getClientOriginalExtension();
            $request->file("hizmet_resim")->move(public_path('/_images/hizmet'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $request->input('eresim');
        }

        $hizmetgnc = hizmetlerimiz::where("id",$id)->update(
            [
                "hizmet_baslik" => $request->input('hizmet_baslik'),
                "hizmet_icerik" => $request->input('hizmet_icerik'),
                "hizmet_resim" => $resim,
                "hizmet_selflink" => Str::slug($request->input('hizmet_baslik'),'-')
            ]
        );
        if($hizmetgnc){
            alert()->success('Tebrikler','Başarıyla Yeni Hizmet Güncellediniz');
            return redirect(route('admin.hizmet'));
        }
    }



}
