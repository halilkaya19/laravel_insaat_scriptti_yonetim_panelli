<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\archiments;
use Illuminate\Http\Request;

class archimentsControllers extends Controller
{
    public function archiments(Request $request){
        $arc = archiments::find(1);
        if($request->method() == "POST"){

            $gnc = archiments::where("id","1")->update([
                "tamamlanan_proje" => $request->input('tamamlanan_proje'),
                "devameden_proje" => $request->input('devameden_proje'),
                "müsteri_say" => $request->input('müsteri_say'),
                "calısanı_proje" => $request->input('calısanı_proje')
            ]);
            alert()->success('Tebrikler','Başarıyla Müşteri Bilgilerini Güncellediniz..');
            return redirect(route('admin.arch'));

        }
        return view("backend.archiments.archiments_page",compact('arc'));
    }
}
