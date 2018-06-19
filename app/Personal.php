<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    protected $table = 'personal';
    protected $primaryKey = 'id';
    protected $fillable = ['id','charge','designation','email',
    'first_name','last_name'];
}
