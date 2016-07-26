<?php

namespace App\Models\Survey;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

    use AnswerRelations;
}

trait AnswerRelations {

    function Question() {
        return $this->belongsTo('App\Models\Survey\Question');
    }

}
