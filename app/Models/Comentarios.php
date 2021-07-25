<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected $table = 'COMENTARIOS';
    protected $primaryKey = 'ID_COMENTARIOS';
    public $timestamps = false;
    public $incrementing = false;
}
