<?php

namespace App\Models\Questions;

use App\Models\Answers\Answers;
use App\Models\Units\Units;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable=[
        'unit_id',
        'question',
        'correct_answer'
    ];
    
    public function answer() {
        return $this->hasMany(Answers::class,'question_id', 'id');
    }

    public function units() {
        return $this->belongsTo(Units::class);
    }
}
