<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected array $questions;

    /**
     * Questionnaire constructor.
     */
    public function __construct()
    {
        $this->questions = $this->sortQuestionsByOrderKey(Questionnaire::find(1)->hasQuestions);
    }

    /**
     * Get the question records associated with the questionnaire.
     */
    public function hasQuestions()
    {
        return Question::with('question')->get();
    }

    /**
     * Get the questions that belong to the questionnaire.
     */
    public function belongsToQuestions()
    {
        return Question::with('question')->get();
    }

    /**
     * Sort questions by the newly made 'order_key' field, in .
     *
     * @param $qs array The questions array.
     * @return array The sorted questions array.
     */
    private function sortQuestionsByOrderKey($qs)
    {
        $ordered = [];
        foreach ($qs as $q) {
            $ordered[$q->order_key] = $q;
        }
        ksort($ordered);
        return array_values($ordered);
    }
}
