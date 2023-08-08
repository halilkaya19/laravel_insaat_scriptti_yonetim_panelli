<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\proje;
use App\Models\projekategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class projeControllers extends Controller
{
    public function index(){
        $projelertüm = proje::all();
        return view("backend.projeler.projeler_page",compact("projelertüm"));
    }

    public function projeekleget(){
        $projetak = projekategori::all();
        return view("backend.projeler.proje_ekle_page",compact("projetak"));
    }

    public function projeeklepost(Request $request){

        $request->validate([
            "proje_kat_id"=>"required",
            "proje_baslik" => "required"
        ]);

        $resim1 = "";
        if($request->hasFile('proje_resim1')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim1")->getClientOriginalExtension();
            $request->file("proje_resim1")->move(public_path('/_images/proje'),$imagename);
            $resim1 = $imagename;
        }

        $resim2 = "";
        if($request->hasFile('proje_resim2')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim2")->getClientOriginalExtension();
            $request->file("proje_resim2")->move(public_path('/_images/proje'),$imagename);
            $resim2 = $imagename;
        }

        $resim3 = "";
        if($request->hasFile('proje_resim3')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim3")->getClientOriginalExtension();
            $request->file("proje_resim3")->move(public_path('/_images/proje'),$imagename);
            $resim3 = $imagename;
        }

        $proje = new proje();
        $proje->proje_kat_id = $request->input('proje_kat_id');
        $proje->proje_baslik = $request->input('proje_baslik');
        $proje->proje_icerik = $request->input('proje_icerik');
        $proje->proje_resim1 = $resim1;
        $proje->proje_resim2 = $resim2;
        $proje->proje_resim3 = $resim3;
        $proje->proje_adres = $request->input('proje_adres');
        $proje->proje_selflink = Str::slug($request->input('proje_baslik'),'-');
        $projeyeniekle = $proje->save();
        if($projeyeniekle){
            alert()->success('Tebrikler','Başarıyla Projeyi sildiniz');
            return redirect(route('admin.proje'));
        }

    }

    public function projeduzenleget($id){
        $projecek = proje::find($id);
        $projetak = projekategori::all();
        return view("backend.projeler.proje_duzenle_page",compact("projecek",'projetak'));
    }

    public function projeguncellepost(Request $request,$id){

        $request->validate([
            "proje_kat_id"=>"required",
            "proje_baslik" => "required"
        ]);

        $resim1 = "";
        if($request->hasFile('proje_resim1')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim1")->getClientOriginalExtension();
            $request->file("proje_resim1")->move(public_path('/_images/proje'),$imagename);
            $resim1 = $imagename;
        }else{
            $resim1 = $request->input('eresim1');
        }

        $resim2 = "";
        if($request->hasFile('proje_resim2')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim2")->getClientOriginalExtension();
            $request->file("proje_resim2")->move(public_path('/_images/proje'),$imagename);
            $resim2 = $imagename;
        }else{
            $resim2 = $request->input('eresim2');
        }

        $resim3 = "";
        if($request->hasFile('proje_resim3')){
            $imagename = Str::slug($request->proje_baslik,"-").'.'.$request->file("proje_resim3")->getClientOriginalExtension();
            $request->file("proje_resim3")->move(public_path('/_images/proje'),$imagename);
            $resim3 = $imagename;
        }else{
            $resim3 = $request->input('eresim3');
        }

        $pr = proje::where("id",$id)->update([
            "proje_kat_id" => $request->input('proje_kat_id'),
            "proje_baslik" => $request->input('proje_baslik'),
            "proje_icerik" => $request->input('proje_icerik'),
            "proje_resim1" => $resim1,
            "proje_resim2" => $resim2,
            "proje_resim3" => $resim3,
            "proje_adres" => $request->input('proje_adres'),
            "proje_selflink" => Str::slug($request->input('proje_baslik'),'-')
        ]);

        if($pr){
            alert()->success('Tebrikler','Başarıyla Projeyi Güncellediniz');
            return redirect(route('admin.proje'));
        }

    }

    public function projesil($id){
        $gelenhizmet = proje::findOrFail($id);
        @unlink(public_path('_images/proje/'.$gelenhizmet->proje_resim1));
        $sil = proje::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Projeyi Sildiniz');
            return redirect(route('admin.proje'));
        }
    }


}
