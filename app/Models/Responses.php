<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Responses extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questionnaire_id'
    ];

    /**
     * Get the response that belongs to a the questionnaire being viewed.
     */
    public function belongsToQuestionnaire()
    {
        return $this->belongsTo('App\Models\Questionnaire');
    }
}
