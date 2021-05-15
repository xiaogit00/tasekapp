<?php

use App\Models\Person;
use App\Models\Program;
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

Route::get('/', function () {
    \Illuminate\Support\Facades\DB::listen(function($query) {
      logger($query->sql, $query->bindings);
    });


    return view('beneficiaries_2',
    [
      'person' => Person::with('programs')->get()
    ]);
});

Route::get('/{person:id}', function (Person $person) {
    return view('profile', [
      'person' => $person,
      'age' => Carbon::parse($person->dob)->age
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Post Requests:
//  Route::post('/pizzas', 'PizzaController@store')
// THEN in  Pizza models:\
// public function store()
