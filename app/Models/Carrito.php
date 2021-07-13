<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $table = 'CARRITO';
    protected $primaryKey = 'ID_DETALLE';
    public $timestamps = false;
    public $incrementing = false;
}
