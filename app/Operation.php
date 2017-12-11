<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
   protected $fillable=['tipoOperacion','product_id','cantidad','user_id'];
}
