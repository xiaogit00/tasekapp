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
<<<<<<< HEAD
        $view = view('benny_data2', compact('persons'))->render();
        return response()->json(['html'=>$view]);
=======
        //This passes persons variable to the view, which is a table, and $view stores the entire html
        $view = view('benny_data2', compact('persons'))->render();  //render returns string content of the view
        return response()->json(['html'=>$view]);  //returns the $view html as response
>>>>>>> 9dc5cc76832ceb97a59b40850279765286f1acc9
      }

        return view('beneficiaries_2',compact('persons'));
    }
}
