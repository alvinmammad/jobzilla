<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    
    public function categorizables()
    {
        return $this->morphToMany('App\Jobs', 'categorizable');
    }

    public function jobs(){
        return $this->hasMany(Jobs::class);
    }

    use HasFactory;
}
