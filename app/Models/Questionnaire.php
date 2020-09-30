<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Questionnaire extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'open', 'slug'
    ];

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
