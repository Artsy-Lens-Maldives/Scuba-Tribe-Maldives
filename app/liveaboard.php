<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class liveaboard extends Model
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
        return $this->hasMany('App\liveaboard_photo', 'liveaboard_id');
    }
    
    public function getFirstImageAttribute() {
        return $this->images()->first();
    }
}
