<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    protected $fillable = [
        'code',
        'owner',
        'provider',
        'event',
        'purchasedate',
        'validuntil',
        'type',
        'kind',
        'status',
        'price'
    ];
    public function User()
    {
        return $this->hasOne(User::class, 'id', 'id');
    }
    public function Event()
    {
        return $this->belongsTo(Events::class, 'id', 'id');
    }
}
