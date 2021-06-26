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
      // Queries the Database for persons and stores in $persons
      $persons = Person::with('programs');

      //SEARCHBAR Functionality --> If there is a request named 'query', set and sent via form in
      //layouts_2, then limit the $persons variable. Else, you just paginate all results.
        if (request('query')) {
          // dd(request('query'));
          $persons = $persons->where('name', 'like', '%' . request('query') . '%')->get();

        }
        else {
          $persons = $persons->Paginate(30);
        }

        //Infinite Scrolling feature.
        //Logic: if there is ajax request, return more benny_data2 via AJAX.
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

      public function store(Request $request)
      {
        $persons = Person::with('programs');
        $benny = new Person;
        $benny->name = $request->input('name');
        $benny->dob = $request->input('dob');
        $benny->familyID = $request->input('familyID');
        $benny->gender = $request->input('gender');
        $benny->id = "testID4";
        // $benny->nric = $request->input('nric');
        $benny->save();
        return view('newuser',
            [
              'persons' => Person::all()
            ]);

      }


}
