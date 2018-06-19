<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    //
    protected $table = 'inspection';
    protected $primaryKey = 'id';
    protected $fillable = ['extension_received','inspected_on','memorandum_number',
    'observation','inspection_result_type','sibasi_receibed','technical_charge',
    'technical_name','fk_tracing'];
}
