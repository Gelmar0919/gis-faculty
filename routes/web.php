<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\dashboard;
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
    return view('home');
})->name('home');

/* Route::get('/', function(){
    return redirect()->route('map');
}); */

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth']],function () {
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

    Route::get('registration', [AuthController::class, 'registration'])->name('register');
    Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
