<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;
    protected $table = 'TIPO_PAGO';
    protected $primaryKey = 'ID_TIPO_PAGO';
    public $timestamps = false;
    public $incrementing = false;
}
