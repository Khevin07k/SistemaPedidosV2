<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    // Definir la relación con Menu
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_pedido')
                    ->withPivot('Cantidad', 'Total'); // Si necesitas almacenar más datos en la tabla pivot
    }
}
