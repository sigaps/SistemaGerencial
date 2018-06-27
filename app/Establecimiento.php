<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    protected $table = 'establecimiento';
    protected $prymaryKey = 'idestablecimiento';
    protected $fillable = ['idestablecimiento','idcliente','idtipo','nomestablecimiento','capital','nitestablecimiento','cantidademplfemenino','cantidademplmasculino','telefonoestablecimiento'];
      
}
