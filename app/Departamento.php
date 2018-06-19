<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'department';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name'];
}
