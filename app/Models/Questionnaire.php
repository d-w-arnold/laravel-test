<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    /**
     * Get the question records associated with the questionnaire.
     */
    public function hasQuestions()
    {
        // return $this->hasMany('App\Models\Question'); // Before eager loading
        return Questionnaire::with(array('questionnaire_id' => function ($query) {
            $query->orderBy('order_key', 'ASC');
        }))->get();
    }

    /**
     * Get the questions that belong to the questionnaire.
     */
    public function belongsToQuestions()
    {
        // $this->belongsToMany('App\Models\Question'); // Before eager loading
        return Questionnaire::with(array('questionnaire_id' => function ($query) {
            $query->orderBy('order_key', 'ASC');
        }))->get();
    }
}
