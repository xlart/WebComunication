<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

    public function index()
    {
        return DB::select("SELECT u.nombre, p.titulo,p.texto,p.estado FROM posts as p, usuarios as u WHERE p.id_usuario=u.id");
    }
    public function store(Request $request)
    {
        $nuevo = new post();
        $nuevo->titulo = $request->titulo;
        $nuevo->texto = $request->texto;
        $nuevo->estado = $request->estado;
        $nuevo->id_usuario = $request->id_usuario;
        $nuevo->save();
        return $nuevo;
    }
    public function destroy($id)
    {
        return post::destroy($id);
    }
}
