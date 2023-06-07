<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentarios;

class comentariosController extends Controller
{

    public function index()
    {
        return comentarios::all();
    }

    public function store(Request $request)
    {
        $comentario = new comentarios();
        $comentario->id_publicaciones = $request->id_publicaciones;
        $comentario->texto = $request->texto;
        $comentario->id_usuarios = $request->id_usuarios;
        $comentario->save();
        return $comentario;
    }

    public function update(Request $request, $id)
    {
        $comentario = comentarios::find($id);
        $comentario->id_publicaciones = $request->id_publicaciones;
        $comentario->texto = $request->texto;
        $comentario->id_usuarios = $request->id_usuarios;
        $comentario->save();
        return $comentario;
    }


    public function destroy($id)
    {
        return comentarios::destroy($id);
    }
}
