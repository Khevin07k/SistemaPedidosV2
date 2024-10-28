<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'menu_pedido')
        ->withPivot('Cantidad', 'Total','menu_id','pedido_id'); // Si necesitas almacenar más datos en la tabla pivot
    }
    
}
