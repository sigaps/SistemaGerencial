<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SIBASI extends Model
{
    //
    protected $table = 'sibasi';
    protected $primaryKey = 'idsibasi';
    protected $fillable = ['idsibasi','zona'];

}
