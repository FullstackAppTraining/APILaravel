<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lingua extends Model
{
    protected $table = 'lingua';
    protected $fillable = ['designicao','abreviatura','pais'];


    public function palavras(){
        return $this->hasMany('App\Models\Palavra','lingua_id','id');
    }
}
