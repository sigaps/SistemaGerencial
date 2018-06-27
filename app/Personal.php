<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table = 'personal';
    protected $primaryKey = 'idpersonal';
    protected $fillable = ['idpersonal','idusuario','nompersonal','apellidopersonal', 'cargo'];
}
