<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstablecimiento extends Model
{
    //
    protected $table = 'tipoestablecimiento	';
    protected $primaryKey = 'idtipo';
    protected $fillable = ['idtipo','tipo'];
   
}
