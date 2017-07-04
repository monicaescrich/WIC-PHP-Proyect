<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $primaryKey = 'id_categoria';
	public $timestamps = false;
    protected $table = 'categorias';
    protected $fillable = ['id_tipo','descripcion'];
    //protected $guarded = ['descripcion'];
}
