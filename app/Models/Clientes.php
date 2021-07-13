<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'CLIENTES';
    protected $primaryKey = 'ID_CLIENTE';
    public $timestamps = false;
    public $incrementing = false;
}
