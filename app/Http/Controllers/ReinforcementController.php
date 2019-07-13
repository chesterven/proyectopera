<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reinforcement;
use App\User;
use \DB;

class ReinforcementController extends Controller
{
    //
    public function concentracion()
    {
    $existe =0;
      $refuerzo = Reinforcement::find(2);
      $usuarios = User::with('reinforcements')->get();
  
      if($refuerzo->users()->where('user_id', auth()->user()->id)->first()){
         $existe=1;
      }

      if($existe == 0){
        $refuerzo->users()->attach(auth()->user()->id,['n_ingresos'=>1]);
        return view('refuerzo.atencion');
      }else{
        $ingresos = $refuerzo->users()->where('user_id', auth()->user()->id)->first()->pivot->n_ingresos;
        $ingresos++;
        
        $refuerzo->users()->updateExistingPivot(auth()->user()->id, ['n_ingresos'=> $ingresos]);
        return view('refuerzo.atencion');
      }
     
       
    }

    public function memoria(){
        $existe =0;
      $refuerzo = Reinforcement::find(3);
      $usuarios = User::with('reinforcements')->get();
  
      if($refuerzo->users()->where('user_id', auth()->user()->id)->first()){
         $existe=1;
      }

      if($existe == 0){
        $refuerzo->users()->attach(auth()->user()->id,['n_ingresos'=>1]);
        return view('refuerzo.atencion');
      }else{
        $ingresos = $refuerzo->users()->where('user_id', auth()->user()->id)->first()->pivot->n_ingresos;
        $ingresos++;
        
        $refuerzo->users()->updateExistingPivot(auth()->user()->id, ['n_ingresos'=> $ingresos]);
        return view('refuerzo.memoria');
      }
    }

    public function lectura(){
        $existe =0;
      $refuerzo = Reinforcement::find(1);
      $usuarios = User::with('reinforcements')->get();
  
      if($refuerzo->users()->where('user_id', auth()->user()->id)->first()){
         $existe=1;
      }

      if($existe == 0){
        $refuerzo->users()->attach(auth()->user()->id,['n_ingresos'=>1]);
        return view('refuerzo.atencion');
      }else{
        $ingresos = $refuerzo->users()->where('user_id', auth()->user()->id)->first()->pivot->n_ingresos;
        $ingresos++;
        
        $refuerzo->users()->updateExistingPivot(auth()->user()->id, ['n_ingresos'=> $ingresos]);
        return view('refuerzo.lectura');
      }
    }

    public function sintesis()
    {
        $existe =0;
        $refuerzo = Reinforcement::find(4);
        $usuarios = User::with('reinforcements')->get();
    
        if($refuerzo->users()->where('user_id', auth()->user()->id)->first()){
           $existe=1;
        }
  
        if($existe == 0){
          $refuerzo->users()->attach(auth()->user()->id,['n_ingresos'=>1]);
          return view('refuerzo.atencion');
        }else{
          $ingresos = $refuerzo->users()->where('user_id', auth()->user()->id)->first()->pivot->n_ingresos;
          $ingresos++;
          
          $refuerzo->users()->updateExistingPivot(auth()->user()->id, ['n_ingresos'=> $ingresos]);
          return view('refuerzo.sintesis');
        }
    }

    public function consejos()
    {
        return view('consejos');
    }

    public function accesos()
    {
        $refuerzos = User::all();
        return view('mostrarAccesos')->with('refuerzos',$refuerzos);
    }
    
    
}
