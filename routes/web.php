<?php

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
    $links = \App\Link::all();

    return view('dashboard', ['links' => $links]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');


Route::get("/page", function(){
   return View::make("admin");
});



//Patient Manager Hospital
Route::post('/postpatienthospital', 'PatientController@RegisterPatient');
Route::get('/addpatienthospital', 'PatientController@index');
Route::get('/searchhospital', 'PatientController@searchhospital');

 //Patient Manager clinic
Route::post('/postpatientclinic', 'PatientClinicController@RegisterPatientClinic');
Route::get('/addpatientclinic', 'PatientClinicController@index');
Route::get('/searchclinic', 'PatientClinicController@searchclinic');

// admin

Route::get("/admin", function(){
    return View::make("admin");
 });
 

Route::post('/addgiunit', 'AdminController@addgiunit');
Route::post('/addbht', 'AdminController@addbht');
Route::post('/addproceedure', 'AdminController@addproceedure');
Route::post('/addoperator', 'AdminController@addoperator');
Route::post('/adddiagnosis', 'AdminController@adddiagnosis');
Route::post('/addcomplications', 'AdminController@addcomplication');
Route::post('/addcomplicationstype', 'AdminController@addcomplicationstype');
