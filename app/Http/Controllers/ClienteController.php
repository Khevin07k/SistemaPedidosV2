<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Cliente::all();
        return view('cliente.create',compact('personas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $datosCliente = request()->except('_token');
        Cliente::insert($datosCliente);
        return redirect()->route('cliente.index')->withErrors($request->messages());
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $cliente = Cliente::findOrFail($cliente['id']);
        return view('cliente.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, $id)
    {
        $datosCliente = request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente = Cliente::findOrFail($cliente['id']);
        $cliente->delete();
        return redirect()->route('cliente.index');

    }
}
