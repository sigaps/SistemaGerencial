<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcedimientoPago extends Model
{
    //
    protected $table = 'payment_procedure';
    protected $primaryKey = 'id';
    protected $fillable = ['id','amount','amount_code',
    'is_canceled','cancelled_on','create_one','delivered_on',
    'is_expired_payment_date','number']; 

}
