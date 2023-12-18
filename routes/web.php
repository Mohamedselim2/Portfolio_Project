<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Models\Expertise;
use App\Models\Message;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/project', function () {
    return view('Project');
});
Route::get('/admin', function () {
    return view('/login');
});
Route::get('/dashboard', function () {
    return view('/dashboard');
});

Route::get('/admin',[UserController::class,'login_page']);

Route::Post('/admin',[UserController::class,'login']);

Route::get('/logout',[UserController::class,'logout']);

Route::Post('/sit',[UserController::class,'sit_data']);

Route::get('/',[HomeController::class,'git']);


Route::post('/change_color',[UserController::class,'color']);

Route::post('/change_password',[UserController::class,'change_password']);

Route::post('/add_skill',[SkillController::class,'add']);

Route::get('/dashboard',[DashboardController::class,'git']);

Route::get('/delete_skill/{id}',[SkillController::class,'delete_skill']);

Route::get('/delete_skills',[SkillController::class,'delete_skills']);

Route::post('/add_Expertise',[ExpertiseController::class,'add']);

Route::get('delete_expertise/{id}',[ExpertiseController::class,'delete']);

Route::get('clear_expertise',[ExpertiseController::class,'delete_all']);


Route::post('/add_certification',[CertificationController::class,'add']);
Route::get('delete_certification/{id}',[CertificationController::class,'delete']);
Route::get('clear_certification',[CertificationController::class,'delete_all']);


Route::post('/add_project',[ProjectController::class,'add']);
Route::get('delete_project/{id}',[ProjectController::class,'delete']);
Route::get('clear_project',[ProjectController::class,'delete_all']);
Route::get('project/{id}',[ProjectController::class,'index']);


Route::post('/add_message',[MessageController::class,'add']);
Route::get('delete_message/{id}',[MessageController::class,'delete']);
Route::get('view_message/{id}',[MessageController::class,'view']);
Route::get('clear_messages',[MessageController::class,'delete_all']);

Route::post('/add_education',[EducationController::class,'add']);
Route::get('delete_education/{id}',[EducationController::class,'delete']);
Route::get('view_education/{id}',[EducationController::class,'view']);
Route::get('clear_education',[EducationController::class,'delete_all']);
