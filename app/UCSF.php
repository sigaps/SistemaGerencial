<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UCSF extends Model
{
    //
    protected $table = 'ucsf';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','fk_sibasi'];
}
