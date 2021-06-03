<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    public function Family()
    {
      // hasOne, hasMany, belongsTo, belongsToMany
      return $this->belongsTo(Family::class, 'id');
    }

    public function Person()
    {
      return $this->hasOne(Person::class);
    }
//$user->familyMember->person->name
}
