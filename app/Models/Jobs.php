<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function skills()
    {
        return $this->morphToMany(Skills::class, 'skillable');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }
    use HasFactory;
}
