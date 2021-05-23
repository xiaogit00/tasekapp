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
      $persons = Person::with('programs')->Paginate(30);
      if($request->ajax()){
        $view = view('benny_data2', compact('persons'))->render();
        return response()->json(['html'=>$view]);
      }

        return view('beneficiaries_2',compact('persons'));
    }
}
