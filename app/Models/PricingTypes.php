<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name'
    ];
    
    public function pricings()
    {
        return $this->hasMany(Pricings::class);
    }
}
