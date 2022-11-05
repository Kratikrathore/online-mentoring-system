<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\StudentController;

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

Route::get('/',[HomeController::class,"index"]);
Route::get('/home',[HomeController::class,"home"]);
Route::get('/logout',[HomeController::class,"logout"]);
Route::get('/contact',[HomeController::class,"contact"]);



Route::get('/adminlogin',[AdminController::class,"login"]);
Route::post('/adminstore',[AdminController::class,"loginstore"]);
Route::post('/adminloginstore',[AdminController::class,"adminloginstore"]);
Route::get('/adminmenu',[AdminController::class,"adminmenu"]);
Route::get('/addmentor',[AdminController::class,"addmentor"]);
Route::get('/addstudent',[AdminController::class,"addstudent"]);
Route::get('/uploadattendance',[AdminController::class,"uploadattendance"]);
Route::post('/uploadattendancestore',[AdminController::class,"uploadattendancestore"]);


Route::post('/mentorregister',[MentorController::class,"mentorregister"]);
Route::get('/mentorlogin',[MentorController::class,"login"]);
Route::post('/mentorstore',[MentorController::class,"mentorloginstore"]);
Route::post('/mentorloginstore',[MentorController::class,"mentorloginstore"]);
Route::get('/mentormenu',[MentorController::class,"mentormenu"]);
Route::get('/addsubject',[MentorController::class,"addsubject"]);
Route::get('/uploadmarks',[MentorController::class,"uploadmarks"]);
Route::post('/uploadmarksstore',[MentorController::class,"uploadmarksstore"]);

Route::get('/viewmarks',[MentorController::class,"viewmarks"]);
Route::get('/viewattendance',[MentorController::class,"viewattendance"]);
Route::get('/report',[MentorController::class,"report"]);
Route::get('/issues',[MentorController::class,"issues"]);
Route::get('/replyissues',[MentorController::class,"replyissues"]);


Route::post('/studentregister',[StudentController::class,"studentregister"]);
Route::get('/studentlogin',[StudentController::class,"login"]);
Route::post('/studentstore',[StudentController::class,"loginstore"]);
Route::post('/studentloginstore',[StudentController::class,"studentloginstore"]);
Route::get('/studentmenu',[StudentController::class,"studentmenu"]);
Route::get('/viewtotalattendance',[StudentController::class,"viewtotalattendance"]);
Route::get('/sendissues',[StudentController::class,"sendissues"]);
Route::post('/issuestore',[StudentController::class,"issuestore"]);
Route::get('/viewreply',[StudentController::class,"viewreply"]);
Route::get('/changepassword',[StudentController::class,"changepassword"]);
Route::get('/viewmarks',[StudentController::class,"viewmarks"]);





/*Database*/



Route::get('/krati',[HomeController::class,"krati"]);

Route::post('/pankaj',[HomeController::class,"pankaj"]);



