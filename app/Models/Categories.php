<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        '$id','category_name'
    ];
    
    public function categorizables()
    {
        return $this->morphToMany('App\Jobs', 'categorizable');
    }

    public function jobs(){
        return $this->hasMany(Jobs::class);
    }

    use HasFactory;
}
