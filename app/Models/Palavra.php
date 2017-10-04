<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palavra extends Model
{
    protected $table = 'palavra';
    protected $fillable = ['designacao','significado','sinonimo'];

    public function lingua(){
        return $this->belongsTo('App\Models\Lingua','lingua_id','id');
    }

    public function expressoes(){
        return $this->belongsToMany('App\Models\Expressao','palavra_has_expressao','palavra_id','expressao_id')
            ->withPivot('id');
    }
}
