<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = [
        'name', 'phone', 'email','country', 'city', 'address','description', 'company_logo'
    ];

    public function socialNetworks()
    {
        return $this->morphMany(SocialNetworks::class, 'socialable');
    }

    use HasFactory;
}
