<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reinforcement extends Model
{
    //

    public function users(){
        return $this->belongsToMany(User::class);
    }
    protected $fillable = [
        'nombre',
    ];
}
