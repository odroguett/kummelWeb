<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    use HasFactory;
    protected $table = 'CONTACTOS';
    protected $primaryKey = 'ID_CONTACTO';
    public $timestamps = false;
    public $incrementing = false;
}
