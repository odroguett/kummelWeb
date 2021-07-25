<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDespacho extends Model
{
    use HasFactory;
    protected $table = 'TIPO_DESPACHO';
    protected $primaryKey = 'ID_TIPO_DESPACHO';
    public $timestamps = false;
    public $incrementing = false;
}
