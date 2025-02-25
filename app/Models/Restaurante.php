<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $fillable = ["id", "Propietario", "Nombre", "Direccion", "Telefono", "Nit", "Email"];
    public function empleados(){
        return $this->hasMany(Empleado::class);
    }

}
