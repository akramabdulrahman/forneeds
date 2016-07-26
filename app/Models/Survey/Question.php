<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

    use QuestionRelations,
        QuestionScopes;
}

trait QuestionRelations {

    function Survey() {
        return $this->belongsTo('App\Models\Survey\Survey');
    }
 
    function Answers() {
        return $this->hasMany('App\Models\Survey\Answer');
    }

}

trait QuestionScopes {
    
}
