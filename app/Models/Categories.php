<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function categorizables()
    {
        return $this->morphToMany('App\Jobs', 'categorizable');
    }

    use HasFactory;
}
