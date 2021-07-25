<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table = 'PROVEEDORES';
    protected $primaryKey = 'ID_PROVEEDOR';
    public $timestamps = false;
    public $incrementing = false;
}
