<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\Tramo_usuario;
use App\Models\tramos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Validator;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;

class TramoUserController extends Controller
{
    //Metodo para mostrar a las clases clases inscritas(tramo_usuario)
    public function index()
    {
        //Querry para devolver los tramos solo del USARIO IDENTIFICADO.
        $datos = Tramo_usuario::where("usuario_id", "=", Auth::user()->id)->get();
        //Guardamos los datos tantos de tramos_users, tramos y actividades para pasarselo a la vista
        $datos2 = tramos::all();
        $datos3 = Actividades::all();

        return view('tramosUser.index', compact("datos", "datos2", "datos3"));
    }

    //Metodo para almacenar una inscripcion a una clase
    public function store(Request $request)
    {
        //Pedimos todos los tramos_users y los guardamos
        $tramosUsuarios = Tramo_usuario::all();
        $user = Auth::user()->id;// Usaurio identificado.
        $ocupado = false;
        //Validamos
        $datosUser = $request->validate([
            'usuario_id' =>  'required',
            'tramo_id' =>  'required'
        ]);

        //Bucle que recorre todo los datos de la tabla tramo_usuarios
        foreach ($tramosUsuarios as $tramo) {
            //Si el usuario logeada ya ha cojido un tramo con ma misma id. Esatara ocupado
            if ($tramo->usuario_id == $user && $tramo->tramo_id == $request ->tramo_id) {
                $ocupado = true;
            }
        }

        //Si no esta ocupado
        if (!$ocupado){

              //Recojemos los datos de la vista y le quitamos el token
              $datosUser = $request->except('_token');

              //Insertamos
              Tramo_usuario::insert($datosUser);
      
              return redirect()->route('tramos.horario')
                  ->with('status', 'Inscrito correctamente.');
        }
        
        return redirect()->route('tramos.horario')
                  ->with('status', 'Ya estas inscrito en está actividad.');
          
    }

    //Borrar una inscripción
    public function destroy(Tramo_usuario $id)
    {
        $id->delete($id);

        return redirect()->route('tramosUser.index')
            ->with('status', 'Te has desinscrito correctamente');
    }
}
