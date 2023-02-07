<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricings extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','price','pricing_type_id','name',
    ];

    public function type()
    {
        return $this->belongsTo(PricingTypes::class,'pricing_type_id');
    }

    public function features()
    {
        return $this->hasMany(PricingFeatures::class);
    }
}
