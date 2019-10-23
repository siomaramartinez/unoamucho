<?php

namespace App\Http\Controllers;

use App\Integrantes;
use App\Equipos;
use Illuminate\Http\Request;

class IntegrantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $Integrantes = integrantes::all();
        return view('FIntegrantes.I_create',compact('Integrantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        //$DatosDeEquipo=request()->all();
        $DatosIntegrantes=request()->except('_token');
       
        if($request->hasFile('foto')){
            $DatosIntegrantes['foto']=$request->file('foto')->store('face','public');
        }

        integrantes::insert($DatosIntegrantes);
        return redirect('Equipos');
      // return response()->json($DatosIntegrantes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function show(Integrantes $integrantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Integrantes $integrantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Integrantes $integrantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Integrantes  $integrantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Integrantes $integrantes)
    {
        //
    }
}
