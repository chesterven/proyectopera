<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reinforcement;
use \DB;

class ReinforcementController extends Controller
{
    //
    public function concentracion()
    {
       
      $refuerzo = Reinforcement::find(2);
      $refuerzo->users()->attach(auth()->user()->id);
        return view('refuerzo.atencion');
    }

    public function memoria(){
        $refuerzo = Reinforcement::find(3);
        $refuerzo->users()->attach(auth()->user()->id);
        return view('refuerzo.memoria');
    }
    public function lectura(){
        $refuerzo = Reinforcement::find(1);
        $refuerzo->users()->attach(auth()->user()->id);
        return view('refuerzo.lectura');
    }

    public function sintesis()
    {
        $refuerzo = Reinforcement::find(4);
        $refuerzo->users()->attach(auth()->user()->id);
        return view('refuerzo.sintesis');
    }

    public function consejos()
    {
        return view('consejos');
    }
    
}
