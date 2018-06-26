<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoExpediente extends Model
{
    //
    protected $table = 'proceso';
    protected $primariKey = ['idproceso','idexpediente'];
    protected $fillable = ['idproceso','idexpediente',
    'estado','fechainicioproceso','fechafinalproceso'];
 }
