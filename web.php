<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
|
*/

// Route::get('/', function () {
//     return view('');
// });
//  Route::get('/new-cat',function(){
//      return view('category');
//  });
Route::get('/home', [categoryController::class, 'index']);

Route::get('/catagory-create', [categoryController::class, 'create']);
Route::get('/catagiry-store', [categoryController::class, 'store']);
Route::get('/catagiry-edit/{id}', [categoryController::class, 'edit']);
Route::put('/category-update/{id}', [categoryController::class, 'update']);
Route::get('/catagory-delete/{id}', [categoryController::class, 'distroy']);

// catagory-delet/{{$catagory->id
//catagiry-update/{{$category->id
///category-update/{{$category->id}}">
// *********************todo*************************

Route::get('/welcome', [TodoController::class, 'index']);
Route::post('/welcome', [TodoController::class, 'cteate']);
Route::get('/list', [TodoController::class, 'store']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::put('/update/{id}', [TodoController::class, 'update']);

Route::get('/delete/{id}', [TodoController::class, 'distroy']);

//****Employee Routes****

Route::get('/empmodal1', [EmployeeController::class, 'index']);
Route::get('/emptable', [EmployeeController::class, 'create']);

Route::post('/empmodale', [EmployeeController::class, 'store']);
Route::get('/empedit/{id}', [EmployeeController::class, 'edit']);
Route::put('/empupdate/{id}', [EmployeeController::class, 'update']);
Route::get('/empdelete/{id}', [EmployeeController::class, 'distroy']);

//Student Routes

Route::get('/index', [StudentController::class, 'index']);
Route::get('/index1', [StudentController::class, 'create']);
Route::post('/store', [StudentController::class, 'store']);
Route::get('/studedit/{id}', [StudentController::class, 'edit']);
Route::put('/studupdate/{id}', [StudentController::class, 'update']);
Route::get('/studelete/{id}', [StudentController::class, 'distroy']);

//  join//

Route::get('/', [StudentController::class, 'show']);
Route::get('/chunk', [StudentController::class, 'chunk']);
