<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $fechaActual = Carbon::now()->toDateString();
        $mesActual = Carbon::now()->month;
        $anioActual = Carbon::now()->year;

        // Obtener los pedidos de todo el mes
        $pedidos = Pedido::whereMonth('created_at', $mesActual)
                         ->whereYear('created_at', $anioActual)
                         ->get();

        // Contar los usuarios registrados en el mes actual
        $usuariosRegistradosEsteMes = User::whereMonth('created_at', $mesActual)
            ->whereYear('created_at', $anioActual)
            ->count();

        // Obtener la cantidad total de cada plato vendido en el mes
        $platosMasVendidos = Menu::select('menus.id', 'menus.Nombre', DB::raw('SUM(menu_pedido.Cantidad) as total'))
            ->join('menu_pedido', 'menus.id', '=', 'menu_pedido.menu_id')
            ->join('pedidos', 'menu_pedido.pedido_id', '=', 'pedidos.id')
            ->whereMonth('pedidos.created_at', $mesActual)
            ->whereYear('pedidos.created_at', $anioActual)
            ->groupBy('menus.id', 'menus.Nombre')
            ->orderBy('total', 'desc')
            ->limit(10)
            ->get();
        
        // dd($platosMasVendidos);

        //dd($platosMasVendidos); // Verifica los resultados

        // Retornar la vista con los pedidos, usuarios y platos
        return view('index', [
            'pedidos' => $pedidos,
            'usuariosRegistrados' => $usuariosRegistradosEsteMes,
            'platosMasVendidos' => $platosMasVendidos
        ]);
    }

}
