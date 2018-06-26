<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table='users';
    protected $primaryKey='id';
    
    protected $fillable = [
        'name', 'email', 'password','type','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function estrategico()
    {
        return $this->type;
    }

    public function tactico()
    {
        return $this->type;
    }
    public function admin() 
    {
        return $this->type;
    }
}
