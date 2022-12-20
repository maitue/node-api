<?php

namespace App\Models\Questions;

use App\Models\Answers\Answers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $fillable=[
        'unit_id',
        'question_name'
    ];
    
    public function answers() {
        return $this->hasMany(Answers::class);
    }
}
