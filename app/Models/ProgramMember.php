<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMember extends Model
{
    use HasFactory;

    public function Program()
    {
      // hasOne, hasMany, belongsTo, belongsToMany
      return $this->belongsTo(Program::class, 'id');
    }
    
}
