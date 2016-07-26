<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class City extends Model {

    use CityRelations,
        CityScopes;

    public function delete() {
        $res = parent::delete();
        if ($res == true) {
            $relations = $this->location; // here get the relation data
            $relations->delete();
        }
    }

}

trait CityRelations {

    /**
     * Area has its Meta
     * 
     * @return Mixed 
     * * */
    public function Meta() {
        return $this->morphOne('App\Models\Location\Meta', 'location');
    }

    /**
     * City belongs to Area
     * 
     * @return Mixed 
     * * */
    public function Area() {
        return $this->belongsTo('App\Models\Location\Area');
    }

    /**
     * City has  Many Neighborhood
     * 
     * @return Mixed 
     * * */
    public function Neighborhoods() {
        return $this->hasMany('App\Models\Location\Neighborhood');
    }

    /**
     * City has many Streets through its Neighborhoods
     * 
     * @return Mixed 
     * * */
    public function Streets() {
        return $this->hasManyThrough('App\Models\Location\Street', 'App\Models\Location\Neighborhood');
    }

}

trait CityScopes {

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();

        static::addGlobalScope('Meta', function(Builder $builder) {
            $builder->with('Meta');
        });
        static::addGlobalScope('Neighborhoods', function(Builder $builder) {
            $builder->with('Neighborhoods');
        });
    }

}
