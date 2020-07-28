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
}
