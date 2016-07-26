<?php

namespace App\Models\Listings;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    use ProjectRelations;
}

trait ProjectRelations {

    function ServiceProvider() {
        return $this->belongsTo('App\ServiceProvider');
    }

    function ServiceProvider() {
        return $this->belongsTo('App\Models\Listings\Sector');
    }

    function Surveys() {
        return $this->hasMany('App\Models\Survey\Survey');
    }

    public function location() {
        return $this->belongsTo('App\Models\Location\Meta');
    }

}
