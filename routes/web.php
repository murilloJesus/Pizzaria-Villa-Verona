<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/{resource}', function ($resource)
{
    if( View::exists("pages.$resource") ){
        return view("pages.$resource");
    }else{
        return view("pages.$resource.index");
    }
});



Route::get('/{folder}/{resource}', function ($folder, $resource)
{
    if( View::exists("pages.$folder.$resource") ){
        return view("pages.$folder.$resource");
    }else{
        return view("pages.$folder.$resource.index");
    }
});

