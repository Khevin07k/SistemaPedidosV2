<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable=[
        'FechaContratacion',
        'Puesto',
        'Salario',
        'restaurante_id',
    ];
    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
