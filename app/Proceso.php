<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table = 'proceso';
    protected $primaryKey = 'idproceso';
    protected $fillable = ['idproceso','idtipoproceso','idexpediente',
    'descripcion','fechainicioproceso','fechafinalproceso'];
}
