<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Street extends Model {

    use StreetRelations,
        StreetScopes;

    public function delete() {
        $res = parent::delete();
        if ($res == true) {
            $relations = $this->location; // here get the relation data
            $relations->delete();
        }
    }

}

trait StreetRelations {

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
    public function Neighborhood() {
        return $this->belongsTo('App\Models\Location\Neighborhood');
    }


}

trait StreetScopes {

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
    }

}
