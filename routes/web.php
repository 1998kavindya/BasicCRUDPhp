<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('students.index');
});


Route::get('/student',[studentController::class, 'index'])->name('student.index');
Route::get('/student/create',[studentController::class, 'create'])->name('student.create');
Route::post('/student',[studentController::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit',[studentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update',[studentController::class, 'update'])->name('student.update');
Route::delete('/student/{student}/delete',[studentController::class, 'delete'])->name('student.delete');
