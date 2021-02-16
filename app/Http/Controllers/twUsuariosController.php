<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tw_usuarios;
use App\Http\Requests\twUpdateUsuarioRequest;
use App\Http\Requests\twCreateUsuarioRequest;

class twUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tw_usuarios::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(twCreateUsuarioRequest $request)
    {
        $input = $request->all();
        tw_usuarios::create($input);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro creado correctamente'
        ],status:201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tw_usuarios::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(twUpdateUsuarioRequest $request,tw_usuarios $id)
    {
        $input = $request->all();
        $id->update($input);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro actualizado correctamente'
        ],status:200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tw_usuarios::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro actualizado correctamente'
        ],status:200);

    }
}
