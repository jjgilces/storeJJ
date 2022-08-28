<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios= Comentario::all();//Select * fromb products 
        return $comentarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comentario = new Comentario;
        $comentario->nombre_cliente = $request->input('nombre_cliente');
        $comentario->titulo = $request->input('titulo');
        $comentario->descripcion = $request->input('descripcion');
        $comentario->calificacion = $request->input('calificacion');
        $comentario->likes = $request->input('likes');
        $comentario->dislikes = $request->input('dislikes');
        $comentario->id_producto = $request->input('id_producto');
        $comentario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Comentario::find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $post = Comentario::find($id);
        $comentario->nombre_cliente = $request->input('nombre_cliente');
        $comentario->titulo = $request->input('titulo');
        $comentario->descripcion = $request->input('descripcion');
        $comentario->calificacion = $request->input('calificacion');
        $comentario->likes = $request->input('likes');
        $comentario->dislikes = $request->input('dislikes');
        $comentario->id_producto = $request->input('id_producto');
        $comentario->save();

        return response()->json($comentario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Comentario::find($id);
        $user->delete();
    }
}
