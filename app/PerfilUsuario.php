<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    //
    protected $table = 'user_profile';
    protected $primaryKey = ['id_user','id_profile'];
    protected $fillable = ['id_uesr','id_profile'];
    
}
