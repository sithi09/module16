<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MailController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

// Studet Routes

Route::get('/studentslist', [StudentController::class, 'studentList'])->name('studentslist');
Route::get('/studentEdit/{id}/{name}', [StudentController::class, 'studentEdit'])->name('studentEdit');
Route::post('/studentEdit', [StudentController::class, 'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentcreate',[studentcontroller::class,"studentcreate"])->name("studentcreate");
Route::post('/studentcreate',[studentcontroller::class,"studentcreatesumitted"])->name("studentcreate");


//Sithi Part

Route::get('/doctor/view',[\App\Http\Controllers\DoctorController::class,'index'])->name('doctors.index');
Route::get('/doctor/create',[\App\Http\Controllers\DoctorController::class,'create'])->name('doctors.create');
Route::post('/doctor/create',[\App\Http\Controllers\DoctorController::class,'store'])->name('doctors.store');
Route::get('/doctor/edit/{id}',[\App\Http\Controllers\DoctorController::class,'edit'])->name('doctors.edit');
Route::post('/doctor/update/{id}',[\App\Http\Controllers\DoctorController::class,'update'])->name('doctors.update');
Route::delete('/doctor/delete/{id}',[\App\Http\Controllers\DoctorController::class,'destroy'])->name('doctors.delete');
Route::get('/sendmail', [MailController::class, 'index']);

//Sithi Part




