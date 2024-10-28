<?php

namespace App\Http\Controllers;

use App\Models\menu_pedido;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedido = Pedido::all();
        return $pedido;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mensaje = null;

        // Obtener el último número de pedido
        $ultimoNumeroPedido = Pedido::orderBy('NumeroPedido', 'desc')->pluck('NumeroPedido')->first();
        // Calcular el nuevo número de pedido
        $numeroPedido = $ultimoNumeroPedido ? $ultimoNumeroPedido + 1 : 1;

        DB::beginTransaction();
        try {
            // Crear un nuevo pedido
            $pedido = new Pedido();
            $pedido->cliente_id = $request->cliente_id;
            $pedido->NumeroPedido = $numeroPedido;
            $pedido->TotalPagar = $request->TotalPagar;
            $pedido->Fecha = now(); // Puedes usar la fecha que envía la vista si es necesario
            $pedido->Observacion = $request->Observacion ?? ''; // Asegúrate de que el campo sea correcto
            $pedido->save();

            // Guardar los detalles del pedido en la tabla pivot
            $menus = $request->pedidos; // Obtener los detalles de los menús

            // Verificar si $menus es un array y no está vacío
            if (is_array($menus) && !empty($menus)) {
                foreach ($menus as $data) {
                    // Asegúrate de que 'Cantidad' y 'total' estén disponibles
                    $pedido->menus()->attach($data['id'], [
                        'Cantidad' => $data['Cantidad'], // Asignar la cantidad directamente
                        'Total' => (float)($data['total']) // Asignar el total directamente
                    ]);
                }
            } else {
                // Manejar el caso en que no hay menús
                $mensaje = "No se proporcionaron menús para el pedido.";
                DB::rollBack();
                return response()->json(['mensaje' => $mensaje], 400);
            }

            $mensaje = "Pedido guardado exitosamente.";
            DB::commit();
        } catch (\Exception $e) {
            $mensaje = $e->getMessage();
            DB::rollBack();
        }

        return response()->json([
            'mensaje' => $mensaje,
            'NumeroPedido' => $numeroPedido
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pedido = Pedido::find($id);
        $pedido->update($request->all());
        return $pedido;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();
        return response()->json(["ELiminado"]);
    }
}
