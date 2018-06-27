<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProceso extends Model
{
    //
    protected $table = 'tipoproceso	';
    protected $primaryKey = 'idtipopro';
    protected $fillable = ['idtipopro','tipoproceso'];
   
}
