<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class catamaran extends Model
{
    use Sluggable;
    
    protected $guarded = [];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images() {
        return $this->hasMany('App\catamaran_photos', 'catamaran_id');
    }
    
    public function getFirstImageAttribute() {
        return $this->images()->first();
    }

    public function reviews() {
        return $this->hasMany('App\catamaran_review', 'catamaran_id');
    }

    public function itinerary() {
        return $this->hasMany('App\catamaran_itinerary', 'catamaran_id');
    }
}
