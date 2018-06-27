<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stablecimientodireccion extends Model
{
    //
    protected $table = 'establecimientodireccion	';
    protected $primaryKey = 'idestablecimiento';
    protected $fillable = ['idestablecimiento','iddireccion'];
   
}
