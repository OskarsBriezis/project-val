<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skin;



Route::get('/', function () {
    return view('home');
});

Route::get('/guns kins', function (){
    return view('guns kins', [
        'guns kins' => Skin::all()
    ]);
});

Route::get('/guns kins/{id}', function ($id){

    $gunskin = Skin::find($id);

    return view ('gun skin', ['gun skin' => $gunskin]);
});
Route::get('/register', function () {
    return view ('register');
});
Route::get('/login', function () {
    return view ('login');
});

