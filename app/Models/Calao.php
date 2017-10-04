<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calao extends Model
{
    protected $table= 'calao';
    protected $fillable=['designacao'];

    public function expressoes(){
        return $this->hasMany('App\Models\Expressao','calao_id',"id");
    }

}
