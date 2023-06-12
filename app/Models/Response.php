<?php

namespace App\Models;

use App\Models\User;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'question_id',
        'option_id',
        'text_value',
        'numeric_value',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec la question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Relation avec l'option
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
