<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Area extends Model {

    use AreaRelations,
        AreaScopes;

    public function delete() {
        $res = parent::delete();
        if ($res == true) {
            $relations = $this->location; // here get the relation data
            $relations->delete();
        }
    }

}

trait AreaRelations {

    /**
     * Area has its Meta
     * 
     * @return Mixed 
     * * */
    public function Meta() {
        return $this->morphOne('App\Models\Location\Meta', 'location');
    }
    
    /**
     * Area has many City
     * 
     * @return Mixed 
     * * */
    public function Cities() {
        return $this->hasMany('App\Models\Location\City');
    }
    /**
     * Area has many neiborhoods through its Cities
     * 
     * @return Mixed 
     * * */
    public function Neighborhoods() {
        return $this->hasManyThrough('App\Models\Location\Neighborhood','App\Models\Location\City');
    }
    

}

trait AreaScopes {

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
        static::addGlobalScope('Cities', function(Builder $builder) {
            $builder->with('Cities');
        });
    }

}
