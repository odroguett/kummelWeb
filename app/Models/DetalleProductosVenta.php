<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleProductosVenta extends Model
{
    use HasFactory;
    protected $table = 'DETALLE_PRODUCTOS_VENTA';
    protected $primaryKey = 'ID_DETALLE';
    public $timestamps = false;
    public $incrementing = false;
}

