<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Pagination\Paginator;

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

Route::get('students',[StudentController::class, 'index']);
Route::get('add_student',[StudentController::class, 'add_student']);
Route::post('save_student',[StudentController::class, 'save_student']);
Route::get('edit_student/{id}',[StudentController::class, 'edit_student']);
Route::post('update_student',[StudentController::class, 'update_student']);
Route::get('delete_student/{id}',[StudentController::class, 'delete_student']);
