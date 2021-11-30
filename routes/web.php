<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adminpanel;

Route::get('/', function () {
    return view('index');
});
//ROUTE ADMIN LOGIN
Route::get('/admin',[Adminpanel::class,'login']);
Route::post('/admin/postlogin',[Adminpanel::class,'postlogin']);
Route::get('/admin/dashboard',[Adminpanel::class,'dashboard']);
Route::get('/admin/logout',[Adminpanel::class,'logout']);