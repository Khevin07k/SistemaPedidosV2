<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nit',
    ];

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }


}
