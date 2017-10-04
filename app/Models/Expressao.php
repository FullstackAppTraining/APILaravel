<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expressao extends Model
{
    protected $table = 'expressao';
    protected $fillable= ['designacao','significado'];

  public function calao(){
      return $this->belongsTo('App\Models\Calao');
  }

    public function palavras(){
        return $this->belongsToMany('App\Models\Palavra','palavra_has_expressao','expressao_id','palavra_id');
    }
}
