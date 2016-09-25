<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $guarded = ['id'];

    public function comments()
    {
        return $this->morphMany('App\Comment', 'post');
    }
}
