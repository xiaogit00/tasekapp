<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramMember;

class Person extends Model
{
    use HasFactory;

    public function Program()
    {
      return $this->hasMany(App\Models\Program, 'program_members', 'personID', 'programID');

    }
}
