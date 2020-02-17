<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosts extends Model
{
    protected $fillable = [
        'name',
        'fantasyname',
        'cnpj',
        'status',
        'mail',
        'password',
        'address',
        'description',
        'cellphone',
        'phone',
        'profimage',
        'bgimage'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = [
        'deleted_at',
    ];
    public function Events()
    {
        $this->hasMany(Events::class, 'id', 'id');
    }
}
