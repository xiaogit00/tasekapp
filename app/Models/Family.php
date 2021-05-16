<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    public function familyMembers()
    {
      return $this->hasMany(Person::class, 'familyID');
      // This allows me to call: Family->familyMembers->name $

    }
}
