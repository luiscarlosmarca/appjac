<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventoRequest; 
use \Input as Input;
use Illuminate\Support\Facades\Session;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Httn evento::nombre($nombre)
                
                ->cedula($cedula)
                ->orderBy('nombres','ASC')
                ->paginate();
    }p\Response
     */
    public function index()
    {
        $eventos=Evento::paginate(5);
        return view('eventos/index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventoRequest $request)
    {
        $evento=Evento::create($request->all());
         Session::flash('message',$evento->nombre.' Fue creado');
        return redirect()->route('inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
       $evento=Evento::findOrFail($id);
        

        return view('eventos/details',compact('evento'));
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
        //
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
