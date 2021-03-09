<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'aforo'
    ];


    //Relación uno a muchos(inversa)
    public function tramo(){
        return $this->belongsTo('App\Models\tramos', "id");
    }
}
