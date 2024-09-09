<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Nit',
        'Direccion',
        'Email',
        'Telefono',
        'user_id',
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    public function pedido(){
        return $this->hasMany(Pedido::class);
    }


}
