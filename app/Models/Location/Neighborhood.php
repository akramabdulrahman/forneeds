<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Neighborhood extends Model {

    use NeighborhoodRelations,
        NeighborhoodScopes;

    public function delete() {
        $res = parent::delete();
        if ($res == true) {
            $relations = $this->location; // here get the relation data
            $relations->delete();
        }
    }

}

trait NeighborhoodRelations {

    /**
     * Area has its Meta
     * 
     * @return Mixed 
     * * */
    public function Meta() {
        return $this->morphOne('App\Models\Location\Meta', 'location');
    }

    /**
     * Neighborhood belongs to City
     * 
     * @return Mixed 
     * * */
    public function City() {
        return $this->belongsTo('App\Models\Location\City');
    }

    /**
     * City has  Many Neighborhood
     * 
     * @return Mixed 
     * * */
    public function streets() {
        return $this->hasMany('App\Models\Location\Street');
    }

}

trait NeighborhoodScopes {

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
        static::addGlobalScope('streets', function(Builder $builder) {
            $builder->with('streets');
        });
    }

}
