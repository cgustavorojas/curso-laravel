<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index()  {

        $posts = ['post1','post2'];

        //return view('contact',['name'=>'Gustavo']);

        $categorias ="pendorcho";

        return view('contact',compact('posts','categorias'));

    }

    function otro($post=4,$otro=49){

        echo $post;
        echo $otro;
    }
}
