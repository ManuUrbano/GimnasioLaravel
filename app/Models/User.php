<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'usuario',
        'email',
        'dni',
        'nombre',
        'apellidos',
        'password',
        '_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $sortable = [
        'id',
        'nombre',
        'email',
        'usuario',
        'dni',
        'rol_id',
        'created_at',
        'updated_at'
    ];

    //Relación uno a muchos(inversa)
    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }

    //Relación muchos a muchos
    public function tramos(){
        return $this->belongsToMany('App\Models\tramos');
    }
}
