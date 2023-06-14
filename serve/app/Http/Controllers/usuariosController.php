<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuariosController extends Controller
{
    public function index()
    {
        return usuario::all();
    }
    public function store(Request $request)
    {
        $nuevo=new usuario();
        $nuevo->nombre=$request->nombre;
        $nuevo->usuario=$request->usuario;
        $nuevo->password=$request->password;
        $nuevo->save();
        return $nuevo;
    }
    public function destroy($id)
    {
        return usuario::destroy($id);
    }
}
