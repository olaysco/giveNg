<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Givetem extends Model
{
    protected $guarded = ['id'];
    protected $casts = [
        'tags' => 'array',
    ];
}
