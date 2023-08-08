<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\nedediler;
use Illuminate\Http\Request;

class nededilerControllers extends Controller
{
    public function index(){
        $nededitüm = nedediler::all();
        return view("backend.nededi.nededi_page",compact('nededitüm'));
    }

    public function nededilerekleget(){
        return view("backend.nededi.nededi_ekle_page");
    }

    public function nededieklepost(Request $request){
        $request->validate([
            "kisi_ad"=>"required"
        ]);
        $nedediler = new nedediler();
        $nedediler->kisi_ad = $request->input('kisi_ad');
        $nedediler->icerik = $request->input('icerik');
        $nededilerekle = $nedediler->save();
        if($nededilerekle){
            alert()->success('Tebrikler','Başarıyla Nedediler Görüşü Eklendiniz');
            return redirect(route('admin.ne'));
        }
    }

    public function nesil($id){
        $sil = nedediler::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Nedediler Görüşü Sildiniz');
            return redirect(route('admin.ne'));
        }
    }

    public function neguncelleget($id){
        $necek = nedediler::find($id);
        return view("backend.nededi.nededi_duzenle_page",compact('necek'));
    }

    public function neguncellepost(Request $request,$id){
        $request->validate([
            "kisi_ad"=>"required"
        ]);

        $hizmetgnc = nedediler::where("id",$id)->update(
            [
                "kisi_ad" => $request->input('kisi_ad'),
                "icerik" => $request->input('icerik')
            ]
        );

        if($hizmetgnc){
            alert()->success('Tebrikler','Başarıyla Nedediler Görüşü Güncellediniz');
            return redirect(route('admin.ne'));
        }

    }

}
