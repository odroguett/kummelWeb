<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    use HasFactory;
    protected $table = 'UNIDADES';
    protected $primaryKey = 'ID_UNIDAD';
    public $timestamps = false;
    public $incrementing = false;

}
