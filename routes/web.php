<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index'])->name("home.index");

// candidate
Route::get('/candidate', [CandidateController::class, 'index'])->name("candidate.index");
Route::post('/candidate/store', [CandidateController::class, 'store'])->name("candidate.store");

// To-do
Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');

Route::put('/todo/update/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todo/destroy/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');

// Emails
Route::get('/', [EmailController::class, 'create'])->name('email.create');
Route::post('/store', [EmailController::class, 'store'])->name('email.store');

Route::get('/showEmails', [EmailController::class, 'index'])->name('showEmails.index');
Route::delete('/showEmails/destroy/{email}', [EmailController::class, 'destroy'])->name('showEmails.destroy');