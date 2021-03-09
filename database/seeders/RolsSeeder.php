<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Rol Admin
        $rol = new Rol();
        $rol->nombre = "Administrador";
        $rol->save();
        
        //Rol User
        $rol = new Rol();
        $rol->nombre = "Usuario";
        $rol->save();
    }
}
