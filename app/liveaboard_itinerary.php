<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class liveaboard_itinerary extends Model
{
    protected $guarded = [];
    
    public function liveaboard() {
        return $this->belongsTo('App\liveaboard', 'liveaboard_id');
    }
}
