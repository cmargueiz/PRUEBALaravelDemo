<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tw_empresas_corporativos;
use App\Http\Requests\twCreateEmpresasCorporativoRequest;
use App\Http\Requests\twUpdateEmpresasCorporativoRequest;

class twEmpresasCorporativosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tw_empresas_corporativos::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(twCreateEmpresasCorporativoRequest $request)
    {
        $input = $request->all();
        tw_empresas_corporativos::create($input);
        return response()->json([
            'res'=>true,
            'message'=>'Registro creado correctamente'
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
        return tw_empresas_corporativos::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(twUpdateEmpresasCorporativoRequest $request, tw_empresas_corporativos $id)
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
        tw_empresas_corporativos::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=>'Registro eliminado correctamente'
        ],status:200);
    }
}
