<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    //
    protected $table = 'expediente';
    protected $primaryKey = 'idexpediente';
    protected $fillable = ['idexpediente','idpago','iducsf','idestablecimiento',
        'estado','fechainicioexpediente','fechafinexpediente','duracionpermiso',
        'numerosolicitud'];
        
}
