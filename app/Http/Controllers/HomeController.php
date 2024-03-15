<?php

// Un namespace es el lugar en donde se encuentra el archivo
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // Se usa __invoke() cuando el controlador solo va administrar una única ruta
    public function __invoke()
    {
        // return view('welcome');
        return view('home');
    }

}
