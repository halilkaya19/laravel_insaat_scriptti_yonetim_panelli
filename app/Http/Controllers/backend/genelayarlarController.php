<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\genelayarlar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class genelayarlarController extends Controller
{
    public function ayarlar(Request $request){
        $genelayar = genelayarlar::find(1);
        if($request->method() == "POST"){

            $resim = "";

            if($request->hasFile('site_logo')){
                $imagename = Str::slug("sitelog","-").'.'.$request->file("site_logo")->getClientOriginalExtension();
                $request->file("site_logo")->move(public_path('/_images/genel'),$imagename);
                $resim = $imagename;
            }else{
                $resim = $request->input('eresim');
            }

            $gnc = genelayarlar::where("id","1")->update([
                "site_logo" => $resim,
                "sosyal_facebook" => $request->input('sosyal_facebook'),
                "sosyal_twitter" => $request->input('sosyal_twitter'),
                "sosyal_instagram" => $request->input('sosyal_instagram'),
                "sosyal_gmail" => $request->input('sosyal_gmail')
            ]);
            alert()->success('Tebrikler','Başarıyla Ayarları Güncellediniz..');
            return redirect(route('admin.ayarlar'));

        }
        return view("backend.genelayar.genelayar_page",compact('genelayar'));
    }
}
