<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\StorePersonaRequest;
use App\Http\Requests\UpdatePersonaRequest;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        return view('persona.create', compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonaRequest $request)
    {
        $datosPersona =  request()->except('_token');
//        dd($datosPersona);
        Persona::insert($datosPersona);
        return redirect()->route('persona.index')->withErrors($request->messages());
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        $persona = Persona::findOrFail($persona['id']);
        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonaRequest $request,$id)
    {
        $datosPersona = request()->except(['_token', '_method']);
        Persona::where('id', '=', $id)->update($datosPersona);
        return redirect()->route('persona.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona = Persona::findOrFail($persona['id']);
        $persona->delete();
        return redirect()->route('persona.index');
    }
}
