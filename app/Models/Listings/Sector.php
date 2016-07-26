<?php

namespace App\Models\Listings;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model {

    use SectorRelations;
}

trait SectorRelations {

    function Surveys() {
        return $this->hasMany('App\Models\Listings\Project');
    }

}
