<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

/*
|--------------------------------------------------------------------------
| PROJECT ROUTES
|--------------------------------------------------------------------------
|
|
*/


Route::get('/projects', '\App\Http\Controllers\ProjectsController@index');

Route::get('/contacts', function(){
    $Contacts = App\Models\Contact::all();

    foreach($Contacts as $contact)
    {
        echo $contact ;
    }
});
