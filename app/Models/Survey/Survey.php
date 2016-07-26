<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

    use SurveyRelations,
        SurveyScopes;

    protected $dates = ['expires_at'];
    protected $casts = [
        'defining_attributes' => 'array',
    ];

}

trait SurveyRelations {

    function Project() {
        return $this->belongsTo('App\Models\Listings\Project');
    }

    function SpecialCase() {
        return $this->belongsTo('App\Models\Listings\SpecialCase');
    }

    function Questions() {
        return $this->hasMany('App\Models\Survey\Question');
    }

    function Answers() {
        return $this->hasManyThrough('App\Models\Survey\Answer');
    }

}

trait SurveyScopes {

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot() {
        parent::boot();

        static::addGlobalScope('Questions', function(Builder $builder) {
            $builder->with('Questions');
        });
        static::addGlobalScope('Answers', function(Builder $builder) {
            $builder->with('Answers');
        });
    }

}
