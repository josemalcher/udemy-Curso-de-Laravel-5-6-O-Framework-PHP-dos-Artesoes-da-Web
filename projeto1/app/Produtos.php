<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public function mostrarComentarios(){
        return $this->hasMany('App\Comentario','produto_id','id');
    }
}
