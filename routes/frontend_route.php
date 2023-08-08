<?php

use \App\Http\Controllers\homepageControllers;
use \App\Http\Controllers\iletisimControllers;
use \App\Http\Controllers\blogControllers;
use \App\Http\Controllers\hizmetlerimizControllers;
use \App\Http\Controllers\projeler;

Route::get('/',[homepageControllers::class,'index'])->name('.homepage');
Route::get('/iletisim',[iletisimControllers::class,'index'])->name('.iletisim');
Route::get('/blog',[blogControllers::class,'index'])->name('.blog');
Route::get('/blog-detay/{id}',[blogControllers::class,'blogdetay'])->name('.blogdetay');
Route::get('/hizmet-detay/{selflink}',[hizmetlerimizControllers::class,'hizmetdetay'])->name('.hizmetdetay');
Route::get('/projelerimiz',[projeler::class,'index'])->name('.projeler');
Route::get('/proje-detay/{selflink}',[projeler::class,'projedetay'])->name('.projedetay');







?>