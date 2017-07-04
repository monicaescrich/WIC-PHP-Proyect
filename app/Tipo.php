<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
	protected $primaryKey = 'id_tipo';
	public $timestamps = false;
    protected $table = 'tipo'; 
    /*protected $fillable = ['id_categoria','nombre','precio','disponible','imagen'];
    protected $guarded = ['descripcion'];*/
}
