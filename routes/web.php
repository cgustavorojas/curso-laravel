<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

/*
Route::get('contact', function () {

   // return to_route('contact2',302);
  // return redirect()->route('contact2',302);
    return view('contact',['name'=>'Gustavo']);
})->name('contact');


Route::get('contact2', function () {
    return view('contact2',['name'=>'Ceferino']);
})->name('contact2');
*/

//Route::get('test',[PrimerControlador::class,'index']);
//Route::get('test2',[SegundoControlador::class,'index']);

//Route::resource('post',PrimerControlador::class);

//Route::get('test',[PrimerControlador::class,'index']);
//Route::get('otro/{post?}/{otro?}',[PrimerControlador::class,'otro']);

Route::resource('post',PostController::class);
