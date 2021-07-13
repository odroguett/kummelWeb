<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    use HasFactory;
    protected $table = 'DESPACHO';
    protected $primaryKey = 'ID_DESPACHO';
    public $timestamps = false;
    public $incrementing = false;
}
