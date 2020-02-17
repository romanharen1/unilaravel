<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'hostId',
        'title',
        'description',
        'provider',
        'status',
        'startdate',
        'enddate',
        'price',
        'images'
    ];
    protected $dates = [
        'deleted_at',
    ];
    // public function Category()
    // {
    //     return $this->hasOne(UniEventCategory::class, 'id', 'id');
    // }
    public function Host()
    {
        return $this->belongsTo(Hosts::class, 'id', 'id');
    }
    public function Ticket()
    {
        return $this->hasMany(Tickets::class, 'id', 'id');
    }
}
