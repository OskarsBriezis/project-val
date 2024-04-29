<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skin;



Route::get('/', function () {
    return view('home');
});

Route::get('/skins', function (){
    return view('skins', [
        'skins' => Skin::all()
    ]);
});

Route::get('/skins/{id}', function ($id){

    $skin = Skin::find($id);

    return view ('skin', ['skin' => $skin]);
});
Route::get('/register', function () {
    return view ('register');
});
Route::get('/login', function () {
    return view ('login');
});

