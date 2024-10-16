<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Http\Requests\StoreEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use App\Models\Persona;
use App\Models\Restaurante;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        //              Meneja el tema de la fecha de contratacion del empleado
        /*$year = date('Y', strtotime($request->FechaContratacion));
        $mes = date('m', strtotime($request->FechaContratacion));
        $day = date('d', strtotime($request->FechaContratacion));
        $datosEmpleado['FechaContratacion'] = "$year-$mes-$day";*/

        $fechaContratacion = Carbon::parse($request->FechaContratacion);
        $datosEmpleado['FechaContratacion'] = $fechaContratacion->format('Y-m-d');
//        Llega hasta aqui
//        dd($request->restaurante_id);
        DB::beginTransaction();
        try {
            $user= User::create([
                'name' => $request->Nombres,
                'email' => $request->Email,
                'password' => Hash::make($request->password)
            ]);
            $personas = $user->persona()->create([
                'Nombres' => $request->Nombres,
                'Apellidos' => $request->Apellidos,
                'Ci' => $request->Ci,
                'Direccion' => $request->Direccion,
                'Email' => $request->Email,
                'Telefono' => $request->Telefono,
            ]);

            $empleado = $personas->empleado()->create([
                'FechaContratacion' => $datosEmpleado['FechaContratacion'],
                'Puesto' => $request->Puesto,
                'Salario' => $request->Salario,
                'restaurante_id' => $request->restaurante_id,
            ]);
            DB::commit();
            return redirect()->route('empleado.index');
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage());
            return redirect()->route('empleado.create');
        }
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
