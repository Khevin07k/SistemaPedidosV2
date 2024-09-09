<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use App\Http\Requests\StoreRestauranteRequest;
use App\Http\Requests\UpdateRestauranteRequest;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurantes = Restaurante::all();
        return view('restaurante.index', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRestauranteRequest $request)
    {
        $datosRestaurante = request()->except('_token');
        Restaurante::insert($datosRestaurante);

        return redirect()->route('restaurante.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurante $restuarante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurante $restaurante)
    {
        $restaurante = Restaurante::findOrFail($restaurante['id']);
        return view('restaurante.edit', compact('restaurante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRestauranteRequest $request,$id)
    {
        $datosRestaurante = request()->except(['_token', '_method']);
        Restaurante::where('id', '=', $id)->update($datosRestaurante);
        Restaurante::findOrFail($id);
        return redirect()->route('restaurante.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante = Restaurante::findOrFail($restaurante['id']);
        $restaurante->delete();
        return redirect()->route('restaurante.index');
    }
}
