<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['id','is_active','joining_date',
    'last_login','password','username'];
}
