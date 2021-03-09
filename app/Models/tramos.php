<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramos extends Model
{
    use HasFactory;

    //Relacion una a muchos
    public function actividades(){
        return $this->hasMany('App\Models\Actividades', "id");
    }

    //Relación muchos a muchos
    public function tramouser(){
        return $this->belongsToMany('App\Models\Tramo_usuario');
    }

    //Relación muchos a muchos
    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
}
// 