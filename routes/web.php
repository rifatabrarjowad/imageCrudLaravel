<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', [StudentController::class , 'index']);
Route::get('/AddStudent', [StudentController::class , 'create']);
Route::post('/adduser', [StudentController::class , 'store']);
Route::get('/editStudent/{id}', [StudentController::class , 'edit']);
Route::put('/updateStudent/{id}', [StudentController::class , 'update']);
Route::get('/deletStudent/{id}', [StudentController::class , 'destroy']);