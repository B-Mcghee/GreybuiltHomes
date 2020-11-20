<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models;
use App\Models\Bio;
use App\Models\Image;
use App\Models\Project;



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

Route::get('/', 'ProjectsController@index');
// Route::get('/projects', function(){
//     $Projects = App\Models\Project::all();

//     foreach($Projects as $project)
//     {
//         return $project;
//     }
// });
// Route::get('/projects/{id}', function($id){
//     $Projects = Project::find($id);

//     return $Projects->images;
//     //  foreach($Projects->images as $project)
//     //  {
//     //      echo $project ;
//     //  };
// });



/*
|--------------------------------------------------------------------------
| CONTACT ROUTES
|--------------------------------------------------------------------------
|
|
*/
Route::get('/contacts', function(){
    $Contacts = App\Models\Contact::all()->orderBy('id');

    return $Contacts;
});

Route::get('/contacts/new', function(){
    return App\Models\Contact::where('contacted', 0)->get();

});
Route::get('/contacts/old', function(){
    return App\Models\Contact::where('contacted', 1)->get();

});


/*
|--------------------------------------------------------------------------
| BIO ROUTES
|--------------------------------------------------------------------------
|
|
*/

Route::get('/about', function(){
    return App\Models\Bio::all();

});

Route::get('/about/{id}', function($id){
    return Image::find($id)->image;

});

Route::get('/abouts/{id}', function($id){
    return Bio::find($id)->cover_image;

});


/*
|--------------------------------------------------------------------------
| FLOOR PLAN ROUTES
|--------------------------------------------------------------------------
|
|
*/

Route::get('/plan', function(){
    return App\Models\Floorplan::all();

});

Route::get('/plan/{id}', function($id){
    return App\Models\Floorplan::where('floorplan_id', $id)->get();

});


/*
|--------------------------------------------------------------------------
| TESTIMONIAL PLAN ROUTES
|--------------------------------------------------------------------------
|
|
*/

Route::get('/testimonial', function(){
    return App\Models\Testimonial::all();

});

Route::get('/testimonial/{id}', function($id){
    return App\Models\Testimonial::where('testimonial_id', $id)->get();

});
