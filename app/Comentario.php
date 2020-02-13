<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{

	protected $table ="comentarios";

    protected $fillable = ['id_discusion', 'id_user', 'cuerpo'];


    public function discusion()
    {
        return $this->belongsTo('App\Discusion', 'id_discusion');
    }

	public function discusion()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
