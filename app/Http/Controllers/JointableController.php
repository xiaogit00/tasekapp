<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;

class JointableController extends Controller
{
    function index()
    {
      $data = Program::join('programMembers', 'programMembers.programID', '=', 'programs.id')
          =>('people', 'people.familyID')
    }
}
