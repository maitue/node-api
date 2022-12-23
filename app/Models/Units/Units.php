<?php

namespace App\Models\Units;

use App\Models\Questions\Questions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;

    public function questions() {
        return $this->hasMany(Questions::class);
    }
}
