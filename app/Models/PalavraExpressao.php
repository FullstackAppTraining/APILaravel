<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PalavraExpressao extends Model
{
    protected $table = 'palavra_has_expressao';

    protected $fillable = ['palavra_id','expressao_id'];
}
