<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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
    return view('welcome');
});

//Route::get('/students','StudentsController@index');
Route::get('/student', function () {
    return view('EvelynGitonga.student');
});
Route::get('/fees', function () {
    return view('EvelynGitonga.fees');
});
//save student
//Route::post('/savestudent', function () {
    //return Controllers('StudentsController@storeStudent');
//});
//save student

Route::post('/savestudent' , 'StudentsController@storeStudent');
Route::post('/savePayment' , 'FeesController@storePayment');



