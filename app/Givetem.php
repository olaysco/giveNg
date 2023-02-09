<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory as HasFactory;

class Givetem extends Model
{
    use HasFactory;

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
