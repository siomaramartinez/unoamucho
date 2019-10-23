<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class EquiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosEquipos['equipo']=Equipos::paginate();
        return view("FEquipos.E_index",$datosEquipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("FEquipos.E_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $request -> validate([
            'Nombre_Equipo' => 'required',
            'Nombre_de_DT' => 'required'
            
           
        ]);
        //$DatosDeEquipo=request()->all();
        $DatosDeEquipo=request()->except('_token');
        //dd($DatosDeEquipo);
        
        if($request->hasFile('Logo')){
            $DatosDeEquipo['Logo']=$request->file('Logo')->store('uploads','public');
        }

        equipos::insert($DatosDeEquipo);
        return redirect('Equipos');
       //return response()->json($DatosDeEquipo);
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Equipo=\App\equipos::findOrfail($id);
        return view('FEquipos.E_from', compact('Equipo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Equipo = Equipos::findOrfail($id);
        return view('FEquipos.E_create',compact('Equipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $DatosDeEquipo=request()->except(['_token','_method']);
         //dd($DatosDeEquipo);
        if($request->hasFile('Logo')){
            $Equipo = Equipos::findOrfail($id);
           Storage ::delete('public/'.$Equipo->Logo);
            $DatosDeEquipo['Logo']=$request->file('Logo')->store('uploads','public');
        }

        Equipos::where('id','=',$id)->update($DatosDeEquipo);
        $Equipo = Equipos::findOrfail($id);
        return view('FEquipos.E_create',compact('Equipo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipos  $equipos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Equipo = Equipos::findOrfail($id);
        if(Storage ::delete('public/'.$Equipo->Logo)){
            Equipos::destroy($id);
        }
     
        return redirect('Equipos');
    }
}
