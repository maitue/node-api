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
    
    public function answers() {
        return $this->hasMany(Answers::class);
    }

    public function units() {
        return $this->belongsTo(Units::class);
    }
}
