<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacione extends Model
{
    use HasFactory;

    protected $fillable = [
        'reparacion', 'urgencia', 'planta', 'fecha_limite', 'estado' , 'user'
    ];    
}
