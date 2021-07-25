<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductosVenta extends Model
{
    use HasFactory;
    protected $table = 'PRODUCTOS_VENTA';
    protected $primaryKey = 'ID_PRODUCTO';
    public $timestamps = false;
    public $incrementing = false;
    
}
