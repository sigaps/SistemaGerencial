<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstablecimiento extends Model
{
    //
    protected $table = 'estabishment_type';
    protected $primaryKey = 'id';
    protected $fillable = ['id','type','fk_section'];
    public function establisment_type(){
        return $this->belongsto(TipoEstablecimiento::class);
    }
}
