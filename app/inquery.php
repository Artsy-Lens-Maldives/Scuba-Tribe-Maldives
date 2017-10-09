<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inquery extends Model
{
    protected $guarded = [];

    public function live_itinerary() {
        return $this->belongsTo('App\liveaboard_itinerary', 'iten_id');
    }
    
    public function liveaboard() {
        return $this->belongsTo('App\liveaboard', 'type_id');
    }

    public function cat_itinerary() {
        return $this->belongsTo('App\catamaran_itineraries', 'iten_id');
    }
    
    public function catamaran() {
        return $this->belongsTo('App\catamaran', 'type_id');
    }

}
