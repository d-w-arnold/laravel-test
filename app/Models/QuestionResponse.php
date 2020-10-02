<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class QuestionResponse extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'response'
    ];

    /**
     * Get the question that this response belongs to.
     */
    public function belongsToQuestion(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
