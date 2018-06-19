<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcesoExpediente extends Model
{
    //
    protected $table = 'casefile_process';
    protected $primariKey = ['casefile_id', 'process_id'];
    protected $fillable = ['finished_on','observation',
    'start_on','casefile_id','process_id','is_active'];
 }
