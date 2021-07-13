<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaProductos extends Model
{
    use HasFactory;
    protected $table = 'VENTA_PRODUCTOS';
    protected $primaryKey = 'CODIGO_PRECIO_PRODUCTO';
    public $timestamps = false;
    public $incrementing = false;
}
