<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $fillable=['nombre_cliente', 'titulo', 'descripcion', 'calificacion', 'likes', 'dislikes', 'id_producto'];
}
