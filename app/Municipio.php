<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $table = 'munincipio';
    protected $primaryKey = 'idmunicipio';
    protected $fillable = ['idmunicipio','iddepartamento','nommunicipio'];
   
}
