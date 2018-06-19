<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $table = 'municipality';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','fk_department'];
    public function municipality(){
        return $this->belongto(Municipio::class);
    }
}
