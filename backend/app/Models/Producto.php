<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   protected $fillable=[
    'id','name','price','description','category','rating_id','image'
   ];
}
