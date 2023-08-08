<?php
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});


//backend Route dahil edildi
include 'backend_route.php';

//backend Route dahil edildi
include 'frontend_route.php';

