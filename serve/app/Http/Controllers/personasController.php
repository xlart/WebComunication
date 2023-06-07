<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personas;

class personasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return personas::all();
    }

    public function store(Request $request)
    {
        $personas = new personas();
        $personas->nombre = $request->nombre;
        $personas->apellidop = $request->apellidop;
        $personas->apellidom = $request->apellidom;
        $personas->correo = $request->correo;
        $personas->telefono = $request->telefono;
        $personas->ci = $request->ci;
        $personas->save();
        return $personas;
    }

    public function update(Request $request, $id)
    {
        $personas = personas::find($id);
        $personas->nombre = $request->nombre;
        $personas->apellidop = $request->apellidop;
        $personas->apellidom = $request->apellidom;
        $personas->correo = $request->correo;
        $personas->telefono = $request->telefono;
        $personas->ci = $request->ci;
        $personas->save();
        return $personas;
    }

    public function destroy($id)
    {
        return personas::destroy($id);
    }
}
