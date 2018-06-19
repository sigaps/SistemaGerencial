<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
    protected $table = 'establishment';
    protected $prymaryKey = 'id';
    protected $fillable = [
        'id','fax','nit','capital','comercial_register'
        ,'email','female_employee_count','fk_tipo'
        ];
        public function establishment()
        {
            return $this->belongsto(Establecimiento::class);
        }
        public function establishment_type(){
            return $this->hasmany(TipoEstablecimiento::class);
        }
}
