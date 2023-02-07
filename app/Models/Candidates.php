<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    public function skills()
    {
        return $this->morphToMany(Skill::class, 'skillable');
    }
    public function languages()
    {
        return $this->hasMany(CandidateLanguages::class);
    }
    public function experiences(){
        return $this->hasMany(CandidateExperiences::class);
    }
    public function educations(){
        return $this->hasMany(CandidateEducations::class);
    }
    public function socialNetworks()
    {
        return $this->morphMany(SocialNetworks::class, 'socialable');
    }
    use HasFactory;
}
