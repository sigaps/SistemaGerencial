<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'Departamento';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nombre'];
}
