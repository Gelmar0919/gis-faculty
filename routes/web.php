<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return redirect()->route('map');
});

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/department', function () {
    return view('department');
})->name('department');

Route::get('/add-department', function () {
    return view('add-department');
})->name('newDep');

Route::get('/edit-department', function () {
    return view('edit-department');
})->name('editDep');

Route::get('/faculty', function () {
    return view('faculty');
})->name('faculty');

Route::get('/add-faculty', function () {
    return view('add-faculty');
})->name('newFaculty');

Route::get('/edit-faculty', function () {
    return view('edit-faculty');
})->name('editFaculty');