<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Junta;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateJuntaRequest; 
use App\Http\Requests\EditJuntaRequest;   

use Illuminate\Support\Facades\Session;
class JuntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $juntas= Junta::buscador($request->get('barrio'),$request->get('numResolucion'));

         return view ('juntas.index', compact('juntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juntas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJuntaRequest $request)
    {
        $junta=Junta::create($request->all());
         Session::flash('message',$junta->nombre.' Fue creado éxitosamente');
        return redirect()->route('junta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function details($id)
    {
        $junta=Junta::findOrFail($id);
        

        return view('juntas.edit',compact('junta'));
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
    public function update(EditJuntaRequest $request, $id)
    {
        $junta=Junta::findOrFail($id);
        $junta->fill($request->all());
        $junta->save();

    Session::flash('message',$junta->nombre.' Se actualizo los datos');
    return redirect()->route('junta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
