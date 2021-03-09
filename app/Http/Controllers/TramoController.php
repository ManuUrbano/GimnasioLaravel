<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\tramos;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Else_;

class TramoController extends Controller
{
    //Metodo para visualizar la vista de index de tramos(CRUD)
    public function index()
    {
        $datos['tramos'] = tramos::paginate(5);
        return view('tramos.index', $datos);
    }


    //Metodo para borrar clases pasandole una id que viene de la vista
    public function destroy(tramos $id)
    {
        $id->delete($id);

        return redirect()->route('tramos.index')
            ->with('status', 'Clase eliminada correctamente');
    }

    //Metodo para editar un tramo pasandole un id
    public function edit($id)
    {
        $tramos = tramos::findOrFail($id);
        $actividades = Actividades::all();
        return view('tramos.edit', compact('tramos'), compact("actividades"));
    }


    //Metodo para actualizar un tramo pasandole su id
    public function update(Request $request, $id)
    {
        $datos = $request->validate([
            'dia' =>  'required|string|',
            'hora_inicio' =>  'required|before:hora_fin',
            'hora_fin' => 'required',
            'actividad_id' => 'required|numeric'
        ]);

        tramos::whereId($id)->update($datos);

        return redirect()->route('tramos.index')->with(['status' => 'Actualizado correctamente']);
    }

    //Metodo para crear una nueva actividad
    public function create(Request $request)
    {
        //Recojemos todas las actividades para pasarselas a la vista y utilizarlas para los selects
        $actividades = Actividades::all();

        return view('tramos.create', compact("actividades"));
    }

    //Metodo para guardar un clase ya creada con su hora
    public function store(Request $request)
    {
        //Recojemos los datos de la vista y le quitamos el token
        $datosUser = $request->except('_token');
        $tramo = tramos::all();
        $ocupado = false;

        //Recorremos todos los datos de la tabla tramo
        foreach ($tramo as $tr) {

            //Este if compureba ya si hay alguna actividad que empieza el mismo dia a la misma hora. 
            if ($tr->dia == $request->dia && $tr->hora_inicio== $request->hora_inicio) {
                //Si existe ocupado = true
                $ocupado = true;
            }
        }
        //Si NO ESTA OCUPADO
        if ($ocupado == false) {

            
            //Validamos
            $datosUser = $request->validate([
                'dia' =>  'required|string|',
                'hora_inicio' =>  'required|before:hora_fin',
                'hora_fin' => 'required',
                'actividad_id' => 'required|numeric'
            ]);

            //Insertamos la nueva clase
            tramos::insert($datosUser);
            $datosUser = request()->except('_token');    

            //Redijirimos a la vista del crud de clases
            return redirect()->route('tramos.index')
                ->with('status', 'Almacenada correctamente');
        } else {

            //Redijirimos a la vista del crud de clases
            return redirect()->route('tramos.index')
                ->with('status', 'Hora y día ya cojidos por OTRA actividad.');

        }
    }

    //Meotodo para mostrar el horario
    public function mostrarHorario()
    {

        //Array para guardar las horas
        $horario = ["09:00:00", "10:00:00", "11:00:00", "12:00:00", "13:00:00", "14:00:00", "15:00:00", "16:00:00", "17:00:00", "18:00:00", "19:00:00", "20:00:00", "21:00:00", "22:00:00", "23:00:00"];
        //Recojemmos todos los usuarios para llevarlos a la vista
        $user = User::all();
        //Recojemmos todos los tramos para llevarlos a la vista
        $tramos = tramos::all();
        //Recojemmos todos las actividades para llevarlos a la vista
        $actividades = Actividades::all();
        return view('tramos.horario', compact('tramos', "actividades", "user", "horario"));
    }
}
