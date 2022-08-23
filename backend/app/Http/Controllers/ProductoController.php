<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductPostRequest;
use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();//Select * fromb products 
        return $productos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPostRequest $request)
    {
        $producto= Producto::create($request->all());
        return response()->json([
            'status' => true,
            'message'=>"Product created succesful",
            'product'=>$producto
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Producto::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductPostRequest $request, $id)
    {
        $post = Producto::find($id);
        $post->update($request->all());
        return response()->json([
            'status' => true,
            'message'=>"Product Updated succesful",
            'product'=>$post
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $user = Producto::find($id);
        $user->delete();
       return [];
    }
}
