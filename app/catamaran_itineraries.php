<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catamaran_itineraries extends Model
{
    protected $guarded = [];

    public function catamaran() {
        return $this->belongsTo('App\catamaran', 'catamaran_id');
    }
}
