<?php

use App\Models\Person;
use App\Models\Program;
use App\Models\Family;
use App\Http\Controllers\BennyController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // \Illuminate\Support\Facades\DB::listen(function($query) {
    //   logger($query->sql, $query->bindings);
    // });
//
//     $persons = Person::with('programs')->Paginate(15);
//     if (request('query')) {
//       $persons->where('name', 'like', '%' . request('query') . '%');
//
//     }
//     if (request('ajax')) {
//
//     		$view = view('data',compact('posts'))->render();
//
//             return response()->json(['html'=>$view]);
//
//         }
//     return view('beneficiaries_2',
//     [
//       'persons' => $persons
//     ]);
// })->name('home');

Route::get('/', [BennyController::class, 'myPerson']);


Route::get('/{person:id}', function (Person $person) {
    return view('profile', [
      'person' => $person,
      'familyMembers' => Family::find($person->familyID)->familyMembers
      //the $person variable returns the results of the INDIVIDUAL person
      //and then we try to find the Family by familyID associated w person :)
      //and then call the familyMembers relationship to return a collection of
      //people in the same family
    ]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Post Requests:
//  Route::post('/pizzas', 'PizzaController@store')
// THEN in  Pizza models:\
// public function store()
