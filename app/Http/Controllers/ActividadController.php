<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    //Metodo para mostrar la vista donde está el CRUD de actividades
    public function index()
    {
        $datos['actividades'] = Actividades::paginate(5);
        return view('actividades.index', $datos);
    }

    //Metodo para borrar una actividad pasandole un $id
    public function destroy(Actividades $id)
    {
        $id->delete($id);

        return redirect()->route('actividades.index')
            ->with('status', 'Actividad eliminada correctamente');
    }

    //Metodo que nos lleva a una vista para editar la actividad seleccionada
    public function edit($id)
    {
        $actividad = Actividades::findOrFail($id);
        return view('actividades.edit', compact('actividad'));
    }


    //Metodo para inserta en la base de datos los cambios de una actividad
    public function update(Request $request, $id)
    {   
        //Validación para actualizar una activadad
        $Data = $request->validate([
            'nombre' =>  'required|string|max:255',
            'descripcion' =>  'required|string',
            'aforo' => 'required|numeric|min:2',
        ]);

        Actividades::whereId($id)->update($Data);

        return redirect()->route('actividades.index')->with(['status' => 'Actualizado correctamente']);
    }

    //Metodo que lleva a la vista para crear una actividad
    public function create(Request $request)
    {
        return view('actividades.create');
    }


    //Metodo para almacenar una activdad nueva
    public function store(Request $request)
    {   
        //Validación
        $request->validate([
            'nombre' =>  'required|string|max:255',
            'descripcion' =>  'required|string|max:255',
            'aforo' => 'required|numeric|min:2',
        ]);

        $datosUser = request()->except('_token');
        Actividades::insert($datosUser);

        //Nos devuelve al crud de actividades
        return redirect()->route('actividades.index')
            ->with('status', 'Actividad creada correctamente');
    }

}
