<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='client';
    protected $primaryKey ='id';
    protected $fillable = ['id','dui','email','name',
    'nationally','passport','resident_card','telephone'
     ];
}