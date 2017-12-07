<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['descripcion','codigo','codigo_barra','precio_costo','precio_publico','stock','category_id'];
}
