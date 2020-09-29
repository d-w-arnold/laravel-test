<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $questionnaireBelongsTo;

    /**
     * Question constructor.
     */
    public function __construct()
    {
        $this->questionnaireBelongsTo = Question::find(1)->hasQuestionnaire;
    }

    /**
     * Get the questionnaire record associated with the question.
     */
    public function hasQuestionnaire()
    {
        return $this->hasOne('App\Models\Questionnaire');
    }

    /**
     * Get the questionnaire that owns the question.
     */
    public function belongsToQuestionnaire()
    {
        return $this->belongsTo('App\Models\Questionnaire');
    }
}
