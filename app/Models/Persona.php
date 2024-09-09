<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public function empleado()
    {
        return $this->hasOne(Empleado::class);
    }
    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
