<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model {

    use ServiceProviderRelations;
}

trait ServiceProviderRelations {
    public function User(){
        return $this->belongsTo('App\User');
    }
    
    public function spType(){
        return $this->belongsTo('App\SPType');
    }
    public function Sector(){
        return $this->belongsTo('App\Models\Listings\Sector');
    }
    public function Projects(){
        return $this->hasMany('App\Models\Listings\Project');
    }
    public function location(){
        return $this->belongsTo('App\Models\Location\Meta');
    }
    
    
    
    
}
