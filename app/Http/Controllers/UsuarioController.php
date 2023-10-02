<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function store(Request $request)
{
    // Valida y almacena los datos enviados por el formulario
    $data = $request->validate([
        'nombres' => 'required',
        'apellidos' => 'required',
        'email' => 'required|email|unique:usuarios,email',
        'telefono' => 'required',
        'direccion' => 'required',
    ]);

    // Crea una nueva instancia del modelo Usuario y asigna los datos
    $usuario = new Usuario();
    $usuario->nombres = $data['nombres'];
    $usuario->apellidos = $data['apellidos'];
    $usuario->email = $data['email'];
    $usuario->telefono = $data['telefono'];
    $usuario->direccion = $data['direccion'];

    // Guarda el usuario en la base de datos
    $usuario->save();

    // Redirecciona a una página de éxito o haz cualquier otra acción deseada
    return redirect()->route('create')->with('success', 'Usuario creado exitosamente');
}


public function index()
{
    $usuarios = Usuario::all(); // Recupera todos los usuarios

    return view('index', ['usuarios' => $usuarios]);
}

}

