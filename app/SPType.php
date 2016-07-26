<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPType extends Model {

    use SPTypeRelations;
}

trait SPTypeRelations {

   
    function ServiceProviders() {
        return $this->hasMany('App\ServiceProvider');
    }

 

}
