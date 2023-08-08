<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class blogControllers extends Controller
{
    public function index(){
        $blogtüm = blog::all();
        return view("backend.blog.blog_page",compact('blogtüm'));
    }

    public function blogekleget(){
        return view("backend.blog.blog_ekle_page");
    }

    public function blogeklepost(Request $request){

        $request->validate([
            "blog_baslik"=>"required",
            "blog_icerik" => "required"
        ]);

        $resim = "";

        if($request->hasFile('blog_resim')){
            $imagename = Str::slug($request->blog_baslik,"-").'.'.$request->file("blog_resim")->getClientOriginalExtension();
            $request->file("blog_resim")->move(public_path('/_images/blog'),$imagename);
            $resim = $imagename;
        }

        $blogekle = new blog();
        $blogekle->blog_baslik = $request->input('blog_baslik');
        $blogekle->blog_icerik = $request->input('blog_icerik');
        $blogekle->blog_resim = $resim;
        $blogekle->blog_yazar = $request->input('blog_yazar');
        $blogekle->blog_selflink = Str::slug($request->input('blog_baslik'),'-');
        $yeniekle = $blogekle->save();
        if($yeniekle){
            alert()->success('Tebrikler','Başarıyla Blog konusu Eklendiniz');
            return redirect(route('admin.blog'));
        }

    }

    public function blogsil($id){
        $gelenhizmet = blog::findOrFail($id);
        @unlink(public_path('_images/blog/'.$gelenhizmet->blog_resim));
        $sil = blog::where('id',$id)->delete();
        if($sil){
            alert()->success('Tebrikler','Başarıyla Blog konusu Sildiniz');
            return redirect(route('admin.blog'));
        }
    }

    public function bloggncget($id){
        $blogcek = blog::find($id);
        return view("backend.blog.blog_duzenle_page",compact('blogcek'));
    }



    public function bloggncpost(Request $request,$id){

        $request->validate([
            "blog_baslik"=>"required",
            "blog_icerik" => "required"
        ]);

        $resim = "";

        if($request->hasFile('blog_resim')){
            $imagename = Str::slug($request->blog_baslik,"-").'.'.$request->file("blog_resim")->getClientOriginalExtension();
            $request->file("blog_resim")->move(public_path('/_images/blog'),$imagename);
            $resim = $imagename;
        }else{
            $resim = $request->input('eresim');
        }

        $blg = blog::where("id",$id)->update([
            "blog_baslik" => $request->input('blog_baslik'),
            "blog_icerik" => $request->input('blog_icerik'),
            "blog_resim" => $resim,
            "blog_yazar" => $request->input('blog_yazar'),
            "blog_selflink" => Str::slug($request->input('blog_baslik'),'-')
        ]);

        if($blg){
            alert()->success('Tebrikler','Başarıyla Blog konusu Güncellediniz');
            return redirect(route('admin.blog'));
        }

    }




}
