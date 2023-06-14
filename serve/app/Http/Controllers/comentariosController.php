<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentarios;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{

    public function index()
    {
        return DB::select("SELECT texto FROM comentarios");
    }

    public function store(Request $request)
    {
        $nuevo = new comentarios();
        $nuevo->texto = $request->texto;
        $nuevo->id_post = $request->id_post;
        $nuevo->id_usuario = $request->id_usuarios;
        $nuevo->save();
        return $nuevo;
    }

    public function destroy($id)
    {
        return comentarios::destroy($id);
    }
}
