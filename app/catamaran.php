<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class catamaran extends Model
{
    use Sluggable;
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    
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
        return $this->hasMany('App\catamaran_photos', 'catamaran_id')->orderBy('order');
    }
    
    public function getFirstImageAttribute() {
        return $this->images()->where('main', '1')->first();
    }

    public function reviews() {
        return $this->hasMany('App\catamaran_reviews', 'catamaran_id');
    }

    public function itinerary() {
        return $this->hasMany('App\catamaran_itineraries', 'catamaran_id');
    }
}
