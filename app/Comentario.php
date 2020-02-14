<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

	protected $table ="comentarios";

    protected $fillable = ['discusion_id', 'id_user', 'cuerpo'];


    public function discusion()
    {
        return $this->belongsTo('App\Discusion', 'discusion_id');
    }

	public function usuario()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
