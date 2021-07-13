<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;
    protected $table = 'DETALLE_VENTAS';
    protected $primaryKey = 'ID_DETALLE';
    public $timestamps = false;
    public $incrementing = false;
}
