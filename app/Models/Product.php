<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //esta funcion declara un relacion uno a uno
    //estoy quiere decir que dentro de las tablas referenciadas buscara el foreig key
    public function ProductDetail()
    {
        return $this->hasOne('App\Models\ProductDetail');
    }
    //esta funcion declara un relacion uno a muchos, ya que imagenes 
    //tendra varios registros con el mismo id
    //estoy quiere decir que dentro de las tablas referenciadas buscara el foreig key
    public function Image()
    {
        return $this->hasMany('App\Models\Image');
    }
}
