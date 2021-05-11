<?php

use App\Models\Person;
use App\Models\Program;
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
    return view('beneficiaries',
    [
      'person' => Person::all()
    ]);
});

Route::get('/{person:id}', function (Person $person) {
    return view('profile', [
      'person' => Person::all()
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
