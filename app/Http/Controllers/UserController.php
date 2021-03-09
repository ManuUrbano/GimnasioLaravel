<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //Metodo para visualizar la vista donde el CRUD de usuarios
    public function index()
    {
        $datos['users'] = User::paginate(5);
        return view('user.index', $datos);
    }


    //Para mostrar la vista de editar perfil
    public function config()
    {
        return view('user.config');
    }

    //Metodo para actualizar el perfil de un usuario
    public function update(Request $request, $id)
    {

        $request->validate([
            'usuario' => 'required|string|max:35',
            'email' =>   'required|string|email|max:255',
            'dni' =>     'required|string|max:30',
            'nombre' =>  'required|string|max:255',
            'apellidos' =>  'required|string|max:255',
            'password' => 'required|string|confirmed|min:3',
        ]);

        //Actualizamos el usuarios si hemos pasdo la validación.
        //LO HE HECHO DE ESTA FORMA PARA QUE LA CONTRASEÑA ESTE INCRIPTADA
        User::whereId($id)->update([

            'usuario' => $request['usuario'],
            'email' =>   $request['email'],
            'dni' =>     $request['dni'],
            'nombre' =>  $request['nombre'],
            'apellidos' =>  $request['apellidos'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('user.index')->with(['status' => 'Actualizado correctamente']);
    }

    //Meotodo para pasar hacia la vista la info del uisuario selecinado en el CRUD
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    //Metodo para borrar el usuario selecionado
    public function destroy(User $id)
    {
        $id->delete($id);

        return redirect()->route('user.index')
            ->with('status', 'Usuario eliminado correctamente');
    }

    //Metodo que lleva a la vista para crear un usuario NO ESTÁ PUESTO
    public function create(Request $request)
    {
        return view('user.create');
    }

    //Metodo para almacenar un nuevo usuario
    public function store(Request $request)
    {

        $request->validate([
            'usuario' => 'required|string|max:30',
            'email' =>   'required|string|email|max:255',
            'dni' =>     'required|string|max:30',
            'nombre' =>  'required|string|max:255',
            'apellidos' =>  'required|string|max:255',
            'password' => 'required|string|confirmed|min:3',
        ]);

        User::create($request->except('_token'));

        $datosUser = request()->except('_token');
        User::insert($datosUser);

        return redirect()->route('user.index')
            ->with('success', 'Usuario almacenado con exito.');
    }
}
