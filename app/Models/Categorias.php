<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    protected $table = 'CATEGORIAS';
    protected $primaryKey = 'ID_CATEGORIA';
    public $timestamps = false;
    public $incrementing = false;

}
