<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicaciones;

class publicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return publicaciones::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publi = new publicaciones();
        $publi->id_personas = $request->id_personas;
        $publi->titulo = $request->titulo;
        $publi->descripcion = $request->descripcion;
        $publi->estado = $request->estado;
        $publi->save();
        return $publi;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $publi=publicaciones::find($id);
        $publi->id_personas = $request->id_personas;
        $publi->titulo = $request->titulo;
        $publi->descripcion = $request->descripcion;
        $publi->estado = $request->estado;
        $publi->save();
        return $publi;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
