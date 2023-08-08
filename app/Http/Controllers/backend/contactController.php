<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\iletisim;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function iletisim(Request $request){
        $iletisimbilgi = iletisim::find(1);
        if($request->method() == "POST"){

            $gnc = iletisim::where("id","1")->update([
               "email" => $request->input('email'),
               "phone" => $request->input('phone'),
               "adres" => $request->input('adres')
            ]);
            alert()->success('Tebrikler','Başarıyla İletişim bölümünü Güncellediniz');
            return redirect(route('admin.iletisim'));

        }
        return view("backend.iletisim.iletisim_page",compact('iletisimbilgi'));
    }
}
