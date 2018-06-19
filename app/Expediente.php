<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    //
    protected $table = 'casefile';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','apply_payment','certification_duration_in_year',
        'certification_start_on',
        'certification_type','request_code','request_number'
        ];
        public function casefile()
        {
            return $this->belongsto(Expediente::class);
        }
}
