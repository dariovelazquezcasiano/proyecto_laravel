<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre', 'dato3', 'dato4', 'dato5', 'dato6', 'dato7', 'dato8'
    ];
}
