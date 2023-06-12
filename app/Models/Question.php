<?php

namespace App\Models;

use App\Models\User;
use App\Models\Option;
use App\Models\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'type',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec les options
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    // Relation avec les réponses
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
