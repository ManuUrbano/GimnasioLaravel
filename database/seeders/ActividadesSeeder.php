<?php

namespace Database\Seeders;

use App\Models\Actividades;
use Illuminate\Database\Seeder;

class ActividadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Activdad 1
        $actividad = new Actividades();
        $actividad->nombre = "Yoga";
        $actividad->descripcion = "La relajación es una de las claves más importantes del Yoga. En los gimnasios españoles esta disciplina ya forma parte de las favoritas de los socios. Cada instructor de Yoga ofrece su sabiduría de forma diferente. Los beneficios del Yoga son interesantes";
        $actividad->aforo = 20;

        $actividad->save();

        //Activdad 2
        $actividad = new Actividades();
        $actividad->nombre = "Body Combat";
        $actividad->descripcion = "Esta clase combina ejercicios típicos de los deportes de contacto y las artes marciales. Recuerda mucho al boxeo, pero siempre guiado a través de una coreografía que pone en marcha ese efecto cardiovascular, que ayuda a quemar calorías.";
        $actividad->aforo = 15;

        $actividad->save();

        //Activdad 3
        $actividad = new Actividades();
        $actividad->nombre = "Body Pump";
        $actividad->descripcion = "El Body Pump es quizás la clase colectiva más socorrida y famosa de los gimnasios españoles. La idea es trabajar con pesas todo el cuerpo, dividiendo la sesión en grupos musculares. Se realizan muchas repeticiones a un ritmo más o menos rápido, lo que ayuda a activar la capacidad cardiovascular.";
        $actividad->aforo = 18;

        $actividad->save();

        //Activdad 4
        $actividad = new Actividades();
        $actividad->nombre = "Spinning";
        $actividad->descripcion = "Sin duda, esta actividad es la que más adeptos tiene en los gimnasios. El spinning se puso de moda hace muchos años y hasta ahora no ha perdido su puesto en el podio de las clases colectivas. Una bicicleta estática especial sirve como elemento indispensable para desarrollar la sesión deportiva.";
        $actividad->aforo = 20;

        $actividad->save();

        //Activdad 5
        $actividad = new Actividades();
        $actividad->nombre = "Xcore";
        $actividad->descripcion = "Xcore es una de las clases colectivas más novedosas de los gimnasios. Básicamente se trata de una sesión de abdominales muy variada, que ayuda al deportista a mejorar la fuerza en el 'core' o centro del cuerpo.";
        $actividad->aforo = 20;

        $actividad->save();

        //Activdad 6
        $actividad = new Actividades();
        $actividad->nombre = "Zumba";
        $actividad->descripcion = "Estas clases de baile aeróbicas son las favoritas de muchos. El ritmo de la música guía toda la sesión, que a través de pasos de baile se convierte en una clase en la que las tensiones se descargan de forma natural. ";
        $actividad->aforo = 20;

        $actividad->save();


    }
}
