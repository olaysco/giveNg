<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Givetem extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'tags' => 'json',
        'pickup_location' => 'json'
    ];

    public function giver()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
