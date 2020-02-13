<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discusion extends Model
{

    protected $table = "discusions";

    protected $fillable = ['user_id', 'titulo','cuerpo'];


    public function comments()
    {
        return $this->hasMany('App\Comentario');
    }

    public function usuario()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
