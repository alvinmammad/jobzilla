<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    public function jobs()
    {
        return $this->morphedByMany(Jobs::class, 'skillable');
    }
  
    public function candidates()
    {
        return $this->morphedByMany(Candidates::class, 'skillable');
    }
    use HasFactory;
}
