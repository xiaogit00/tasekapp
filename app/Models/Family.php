<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    public function Person()
    {
      return $this->hasMany(Person::class, 'family_members', 'familyID', 'personID');

    }
}
