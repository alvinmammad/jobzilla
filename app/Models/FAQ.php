<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;
    protected $fillable = [
        'question', 'answer', 'faqtype_id'
    ];

    public function type()
    {
        return $this->belongsTo(FAQtypes::class, 'faqtype_id');
    }
}
