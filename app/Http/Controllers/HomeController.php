<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller /*metodos para administra unica ruta ruta a traves de invoke*/
{
    public function __invoke(){
     /*return view('welcome');*/
        return view('home');   
    }//
}
