<?php

namespace App\Models\Answers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Answers extends Model
{
    use HasFactory, HasFactory, Notifiable;

    protected $fillable = [
        'question_id',
        'answer'
    ];

    public function question() {
        return $this->belongsTo(Questions::class, 'question_id', 'id');
    }
}
