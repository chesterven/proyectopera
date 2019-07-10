<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReinforcementController extends Controller
{
    //
    public function concentracion()
    {
        return view('refuerzo.atencion');
    }

    public function memoria(){
        return view('refuerzo.memoria');
    }
    public function lectura(){
        return view('refuerzo.lectura');
    }
}
