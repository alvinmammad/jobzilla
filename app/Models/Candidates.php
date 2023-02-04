<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    public function skills()
    {
        return $this->morphToMany(Skill::class, 'skillable');
    }
    public function category()
    {
        return $this->morphOne('App\Category', 'categorizable');
    }

    use HasFactory;
}
