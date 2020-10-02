<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Question extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questionnaire_id', 'question', 'order_key'
    ];

    /**
     * Get the questionnaire record associated with the question.
     */
    public function hasQuestionnaire(): HasOne
    {
        return $this->hasOne(Questionnaire::class);
    }

    /**
     * Get the questionnaire that owns the question.
     */
    public function belongsToQuestionnaire(): BelongsTo
    {
        return $this->belongsTo(Questionnaire::class);
    }
}
