<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLibros extends Model
{
    protected $fillable = array('user_id', 'libro_id', 'busqueda_id','calificado');
}
