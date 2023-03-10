<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingFeatures extends Model
{
    use HasFactory;

    public function pricing()
    {
        return $this->belongsTo(Pricings::class,'pricing_id');
    }
}
