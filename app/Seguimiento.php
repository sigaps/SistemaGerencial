<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model
{
    //
    protected $table = 'tracing';
    protected $primaryKey = 'id';
    protected $fillable = ['id','created_on','observation',
    'ucsf_received_on'];
}
