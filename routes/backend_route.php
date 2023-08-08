<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\backend\HizmetControllers;
use \App\Http\Controllers\backend\sliderControllers;
use \App\Http\Controllers\backend\nededilerControllers;
use \App\Http\Controllers\backend\referansControllers;
use \App\Http\Controllers\backend\blogControllers;
use \App\Http\Controllers\backend\projekategoriControllers;
use \App\Http\Controllers\backend\projeControllers;
use \App\Http\Controllers\backend\contactController;
use \App\Http\Controllers\backend\genelayarlarController;
use \App\Http\Controllers\backend\homeControllers;

Route::group(["prefix"=>"admin","as"=>"admin","middleware"=>"auth"],function(){

    Route::get("/",[homeControllers::class,'index']);

    //Archiments
    Route::match(["post","get"],"/archiments",[\App\Http\Controllers\backend\archimentsControllers::class,'archiments'])->name('.arch');
    //iletisim Route
    Route::match(["post","get"],"/iletisim",[contactController::class,'iletisim'])->name('.iletisim');

    //Genel Ayarlar Route
    Route::match(["post","get"],"/genel-ayarlar",[genelayarlarController::class,'ayarlar'])->name('.ayarlar');

    //Hizmetlerimiz Route
    Route::group(["prefix"=>"hizmetlerimiz","as"=>".hizmet"],function(){
        Route::get('/',[HizmetControllers::class,'index']);
        Route::get('/ekle',[HizmetControllers::class,'hizmetekleget'])->name('.hizmetekleget');
        Route::post('/ekle',[HizmetControllers::class,'hizmeteklepost'])->name('.hizmeteklepost');
        Route::get('/duzenle/{id}',[HizmetControllers::class,'hizmetgncget'])->name('.hizmetgncget');
        Route::post('/duzenle/{id}',[HizmetControllers::class,'hizmetgncpost'])->name('.hizmetgncpost');
        Route::get('/sil/{id}',[HizmetControllers::class,'hizmetsil'])->name('.hizmetsil');
    });

    //Slider Route
    Route::group(["prefix"=>"slider","as"=>".slider"],function(){
        Route::get('/',[sliderControllers::class,'index']);
        Route::get('/ekle',[sliderControllers::class,'sliderEkleget'])->name('.sliderEkleget');
        Route::post('/ekle',[sliderControllers::class,'sliderEklepost'])->name('.sliderEklepost');
        Route::get('/duzenle/{id}',[sliderControllers::class,'sliderguncelleget'])->name('.sliderguncelleget');
        Route::post('/duzenle/{id}',[sliderControllers::class,'sliderguncellepost'])->name('.sliderguncellepost');
        Route::get('/sil/{id}',[sliderControllers::class,'slidersil'])->name('.slidersil');
    });

    //Nedediler BÖlümü
    Route::group(["prefix"=>"nedediler","as"=>".ne"],function(){
        Route::get('/',[nededilerControllers::class,'index']);
        Route::get('/ekle',[nededilerControllers::class,'nededilerekleget'])->name('.nededilerekleget');
        Route::post('/ekle',[nededilerControllers::class,'nededieklepost'])->name('.nededieklepost');
        Route::get('/duzenle/{id}',[nededilerControllers::class,'neguncelleget'])->name('.neguncelleget');
        Route::post('/duzenle/{id}',[nededilerControllers::class,'neguncellepost'])->name('.neguncellepost');
        Route::get('/sil/{id}',[nededilerControllers::class,'nesil'])->name('.nesil');
    });

    //Referanslar
    Route::group(["prefix"=>"referans","as"=>".ref"],function(){
        Route::get('/',[referansControllers::class,'index']);
        Route::get('/ekle',[referansControllers::class,'referansekleget'])->name('.referansekleget');
        Route::post('/ekle',[referansControllers::class,'referanseklepost'])->name('.referanseklepost');
        Route::get('/sil/{id}',[referansControllers::class,'reftsil'])->name('.rsil');
        Route::get('/duzenle/{id}',[referansControllers::class,'referansguncelleget'])->name('.referansguncelleget');
        Route::post('/duzenle/{id}',[referansControllers::class,'referansguncellepost'])->name('.referansguncellepost');
    });

    //Blog Bölümü
    Route::group(["prefix"=>"blog","as"=>".blog"],function(){
        Route::get('/',[blogControllers::class,'index']);
        Route::get('/ekle',[blogControllers::class,'blogekleget'])->name('.blogekleget');
        Route::post('/ekle',[blogControllers::class,'blogeklepost'])->name('.blogeklepost');
        Route::get('/sil/{id}',[blogControllers::class,'blogsil'])->name('.blogsil');
        Route::get('/duzenle/{id}',[blogControllers::class,'bloggncget'])->name('.bloggncget');
        Route::post('/duzenle/{id}',[blogControllers::class,'bloggncpost'])->name('.bloggncpost');
    });

    //Projeler Bölümü
    Route::group(["prefix"=>"projeler","as"=>".proje"],function(){

        Route::get('/',[projeControllers::class,'index']);
        Route::get('/yeni-proje-ekle',[projeControllers::class,'projeekleget'])->name('.projeekleget');
        Route::post('/yeni-proje-ekle',[projeControllers::class,'projeeklepost'])->name('.projeeklepost');
        Route::get('/duzenle/{id}',[projeControllers::class,'projeduzenleget'])->name('.projeduzenleget');
        Route::post('/duzenle/{id}',[projeControllers::class,'projeguncellepost'])->name('.projeguncellepost');
        Route::get('/sil/{id}',[projeControllers::class,'projesil'])->name('.projesil');

        Route::get('/proje-kategorileri',[projekategoriControllers::class,'index'])->name('.projekategorilistesi');
        Route::get('/proje-kategori-ekle',[projekategoriControllers::class,'projekategoriekleget'])->name('.projekategoriekleget');
        Route::post('/proje-kategori-ekle',[projekategoriControllers::class,'projekategorieklepost'])->name('.projekategorieklepost');
        Route::get('/proje-kategori-sil/{id}',[projekategoriControllers::class,'projekatsil'])->name('.projekatsil');
    });


});


?>