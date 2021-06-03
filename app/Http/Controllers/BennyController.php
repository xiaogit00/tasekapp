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
      if (request('query')) {
        $persons = $persons->where('name', 'like', '%' . request('query') . '%')->get();

      }
      dd($persons);
      if($request->ajax()){
        //This passes persons variable to the view, which is a table, and $view stores the entire html
        $view = view('benny_data2', compact('persons'))->render();  //render returns string content of the view
        return response()->json(['html'=>$view]);  //returns the $view html as response
      }

        return view('beneficiaries_2',
            [
              'persons' => $persons
            ]);
    }

}
