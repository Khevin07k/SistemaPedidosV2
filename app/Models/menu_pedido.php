<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'Cantidad',
        'TotalPagar',
        'menu_id',
        'pedido_id',
        'empleado_id'
    ];
    protected $table = 'menu_pedido';

    /* public function menu(){
        return $this->belongsTo(Menu::class);
    }
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    } */
}
