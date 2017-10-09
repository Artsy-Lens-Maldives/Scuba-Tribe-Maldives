<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class diving_spot extends Model
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
        return $this->hasMany('App\dive_photos', 'dive_id');
    }
    
    public function getFirstImageAttribute() {
        return $this->images()->first();
    }

    public function reviews() {
        return $this->hasMany('App\dive_reviews', 'dive_id');
    }
}
