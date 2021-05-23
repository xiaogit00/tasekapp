<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

use Validator;
use Redirect;
use Response;

class BennyController extends Controller
{
    public function myPerson(Request $request)
    {
      $persons = Person::with('programs')->Paginate(10);
      if($request->ajax()){
        $view = view('data', compact('persons'))->render();
        return response()->json(['html'=>$view]);
      }

        return view('beneficiaries_2',compact('persons'));
    }
}
