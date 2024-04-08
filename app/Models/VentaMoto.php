<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaMoto extends Model
{
    use HasFactory;
    protected $table = 'venta_motos';

    protected $fillable = [
        'Nombre_Vendedor',
        'Nombre_Comprador',
        'Marca_Moto',
        'Valor_Moto',
        'Fecha_Venta',
    ];
}

