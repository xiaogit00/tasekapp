<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProgramMember;

class Person extends Model
{
    use HasFactory;
    protected $keyType = 'string';

    public function programs()
    {
      return $this->belongsToMany(Program::class, 'program_members', 'personID', 'programID');

    }
}
