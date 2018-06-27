<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='desempeno';
    protected $primaryKey ='iddesempeno';
    protected $fillable = ['iddesempeno','idpersonal','tiempoconexion',
    'cantidadsolicitudes','cantidadproceso','promedio', 'fechadesempeno'];
}