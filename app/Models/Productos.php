<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'PRODUCTOS';
    protected $primaryKey = 'ID_PRODUCTO';
    public $timestamps = false;
    public $incrementing = false;
}

