<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='direccion';
    protected $primaryKey ='iddireccion';
    protected $fillable = ['iddireccion','idmunicipio','detalle'];
}