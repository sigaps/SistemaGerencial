<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuario';
    protected $primaryKey = 'idusuario';
    protected $fillable = ['idusuario','idpersonal','nombreusuario',
    'activo','ultimaconexionusuario','fecharegistro'];
}
