<?php

namespace App\Http\Controllers;

use App\tw_corporativos;
use App\Http\Requests\twCreateCorporativoRequest;
use App\Http\Requests\twUpdateCorporativoRequest;
use Illuminate\Http\Request;

class twCorporativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tw_corporativos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(twCreateCorporativoRequest $request)
    {
        $input = $request->all();
        tw_corporativos::create($input);
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
        
        return tw_corporativos::findOrFail($id)
        ->load('tw_empresas_corporativo')
        ->load('tw_contactos_corporativo')
        ->load('tw_contratos_corporativo')
        ->load('tw_documentos_corporativo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(twUpdateCorporativoRequest $request, tw_corporativos $id)
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
        tw_corporativos::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro eliminado correctamente'
        ],status:200);
    }
}
