<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='cliente';
    protected $primaryKey ='idcliente';
    protected $fillable = ['idcliente','nomcliente','duicliente',
    'nacionalidad','telefonocliente'];
}
