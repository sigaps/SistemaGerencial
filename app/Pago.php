<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='pago';
    protected $primaryKey ='idpago';
    protected $fillable = ['idpago','idexpediente','cancelado','monto','fechapago'];
}