<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $questions;

    /**
     * Questionnaire constructor.
     */
    public function __construct()
    {
        $this->questions = Questionnaire::find(1)->hasQuestions;
    }

    /**
     * Get the question records associated with the questionnaire.
     */
    public function hasQuestions()
    {
        return $this->hasMany('App\Models\Question');
    }

    /**
     * Get the questions that belong to the questionnaire.
     */
    public function belongsToQuestions()
    {
        return $this->belongsToMany('App\Models\Question');
    }
}
