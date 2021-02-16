<?php

namespace App\Http\Controllers;

use App\Http\Requests\twCreateDocumentoRequest;
use App\Http\Requests\twUpdateDocumentoRequest;
use App\tw_documentos;
use Illuminate\Http\Request;

class twDocumentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return tw_documentos::all();;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(twCreateDocumentoRequest $request)
    {
        $input = $request->all();
        tw_documentos::create($input);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro creado correctamente'
        ],status:201);

       // $validated = $request->validated();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tw_documentos::findOrFail($id)
        ->load('tw_documentos_corporativo')
        ->load('tw_documentos_to_corporativo');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(twUpdateDocumentoRequest $request, tw_documentos $id)
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
        tw_documentos::destroy($id);
        return response()->json([
            'res'=>true,
            'message'=> 'Registro elimindao correctamente'
        ],status:200);
    }
}
