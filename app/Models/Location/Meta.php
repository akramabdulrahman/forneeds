<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model {

    use MetaRelations;
   

}

trait MetaRelations {

    /**
     * Meta can be Area Meta
     * 
     * @return Mixed 
     * * */
    public function Area() {
        return $this->morphTo('App\Models\Location\Area');
    }

    /**
     * Meta can be City Meta
     * 
     * @return Mixed 
     * * */
    public function City() {
        return $this->morphTo('App\Models\Location\City');
    }

    /**
     * Meta can be Neighborhood Meta
     * 
     * @return Mixed 
     * * */
    public function Neighborhood() {
        return $this->morphTo('App\Models\Location\Neighborhood');
    }

    /**
     * Meta can be Street Meta
     * 
     * @return Mixed 
     * * */
    public function Street() {
        return $this->morphTo('App\Models\Location\Street');
    }
    /**
     * Meta can be covered by a serviceProvider 
     * 
     * @return Mixed 
     * * */
    public function ServiceProvider() {
        return $this->morphTo('App\ServiceProvider');
    }

}

