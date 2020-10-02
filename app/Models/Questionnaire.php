<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
     * The attributes to be loaded with eager loading.
     *
     * @var array
     */
    protected $with = [
        'hasQuestions'
    ];

    /**
     * Get the question records associated with the questionnaire.
     */
    public function hasQuestions(): HasMany
    {
        return $this->hasMany(Question::class)->orderBy('order_key');
    }

    /**
     * Get the questions that belong to the questionnaire.
     */
    public function belongsToQuestions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class)->orderBy('order_key');
    }
}
