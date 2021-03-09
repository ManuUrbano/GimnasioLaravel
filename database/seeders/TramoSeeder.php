<?php

namespace Database\Seeders;

use App\Http\Controllers\TramoController;
use App\Models\tramos;
use Illuminate\Database\Seeder;

class TramoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Lunes";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "1";

 
         $tramo->save();

         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Martes";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "2";

 
         $tramo->save();

         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Miercoles";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "3";

 
         $tramo->save();

         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Jueves";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "4";

 
         $tramo->save();

         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Viernes";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "5";

 
         $tramo->save();

         //Tramo
         $tramo = new tramos();
         $tramo->dia = "Sabado";
         $tramo->hora_inicio = "09:00:00";
         $tramo->hora_fin = "10:00:00";
         $tramo->actividad_id = "6";

 
         $tramo->save();


    }
}
