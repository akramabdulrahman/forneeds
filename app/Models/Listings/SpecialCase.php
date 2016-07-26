<?php

namespace App\Models\Listings;

use Illuminate\Database\Eloquent\Model;

class SpecialCase extends Model {

    use SpecialCaseRelations;
}

trait SpecialCaseRelations {

    function Surveys() {
        return $this->hasMany('App\Models\Survey\Survey');
    }

}
