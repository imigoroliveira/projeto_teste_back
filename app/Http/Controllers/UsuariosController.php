<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\CadastroUsuarioRequest;
use App\Http\Requests\EdicaoUsuarioRequest;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(CadastroUsuarioRequest $request)
    {
        Usuario::create($request->validated());
        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(EdicaoUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->validated());
        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
