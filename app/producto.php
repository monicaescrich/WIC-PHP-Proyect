<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public  function scopeBlusas($query){
        return $query->where('id_categoria',3);
    }
    public  function scopePantalones($query){
        return $query->where('id_categoria',1);
    }
     public  function scopeAccesorios($query){
        return $query->where('id_categoria',2);
    }
}

