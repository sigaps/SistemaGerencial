<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UCSF extends Model
{
    //
    protected $table = 'ucsf';
    protected $primaryKey = 'iducsf';
    protected $fillable = ['iducsf','idsibasi','nomucsf'];
}
