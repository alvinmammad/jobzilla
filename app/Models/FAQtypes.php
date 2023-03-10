<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQtypes extends Model
{
    protected $fillable = [
        'type_name'
    ];
    public function faqs()
    {
        return $this->hasMany(FAQ::class);
    }
    use HasFactory;
}
