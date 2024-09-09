<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Models\Persona;
use App\Models\Restaurante;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        $restaurante = Restaurante::all();
        return view('empleado.index', ['empleados' => $empleados, 'restaurantes' => $restaurante]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurante = Restaurante::all();
        return view('empleado.create', compact('restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmpleadoRequest $request)
    {
        try {
            $persona = Persona::create([
                'Nombres' => $request->Nombres,
                'Apellidos' => $request->Apellidos,
                'Ci' => $request->Ci,
                'Direccion' => $request->Direccion,
                'Email' => $request->Email,
                'Telefono' => $request->Telefono,
            ]);





            $year = date('Y', strtotime($datosEmpleado['FechaContratacion']));
            $mes = date('m', strtotime($datosEmpleado['FechaContratacion']));
            $day = date('d', strtotime($datosEmpleado['FechaContratacion']));
            $datosEmpleado['FechaContratacion'] = "$year-$mes-$day";
        } catch (\Exception $e) {
        }
        //        die($request->FechaContratacion);


//        dd($datosEmpleado);
        Empleado::insert($datosEmpleado);
        return redirect()->route('empleado.index')->withErrors($request->messages());
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {

        $empleado = Empleado::findOrFail($empleado['id']);
        $restaurante = Restaurante::all();
//        dd($empleado);
        return view('empleado.edit', compact('empleado', 'restaurante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmpleadoRequest $request, $id)
    {
        $datosEmpleado = request()->except(['_token', '_method']);
        Empleado::where('id', '=', $id)->update($datosEmpleado);
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        $empleado = Empleado::findOrFail($empleado['id']);
        $empleado->delete();
        return redirect()->route('empleado.index');
    }
}
