<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class producto extends Model
{

    protected $primaryKey = 'id_producto';
	public $timestamps = false;
    protected $table = 'productos'; 
    protected $fillable = ['id_categoria','nombre','precio','disponible','imagen'];
    protected $guarded = ['descripcion'];

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

