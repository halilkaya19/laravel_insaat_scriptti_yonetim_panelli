<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\projekategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class projekategoriControllers extends Controller
{
    public function index(){
        $projekatliste = projekategori::all();
        return view("backend.projeler.projekategori_page",compact('projekatliste'));
    }

    public function projekategoriekleget(){
        return view("backend.projeler.projekategori_ekle_page");
    }

    public function projekategorieklepost(Request $request){
        $request->validate([
            "proje_katbaslik"=>"required"
        ]);
        $refref = new projekategori();
        $refref->proje_katbaslik = $request->input('proje_katbaslik');
        $refref->proje_katbaslik_selflink = Str::slug($request->input('proje_katbaslik'),'-');
        $refrefeke = $refref->save();
        if($refrefeke){
            alert()->success('Tebrikler','Başarıyla Proje Kategori Eklediniz');
            return redirect(route('admin.proje.projekategorilistesi'));
        }
    }

    public function projekatsil($id){
        $sil = projekategori::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla sildiniz');
            return redirect(route('admin.proje.projekategorilistesi'));
        }
    }

}
