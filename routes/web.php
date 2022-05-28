<?php

use App\Http\Controllers\BladeController;
use App\Http\Controllers\DbController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\NewCOntroller;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function() {
    return redirect('contact');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::view('about', 'about');
Route::get('blade', [BladeController::class, 'index']);
Route::post('users', [UserController::class, 'testRequest']);

Route::view('noaccess', 'noaccess');
Route::view('home', 'home');
Route::get('db', [DbController::class, 'index']);
Route::get('show', [UserController::class, 'showData']);
Route::get('http', [HttpController::class, 'index']);

Route::view('profile','profile');
Route::view('login','login');
Route::post('user', [LoginController::class, 'userLogin']);
Route::get('/logout', function () {
    if(session()->has('name')) {
        return redirect('profile');
    }
    return redirect('login');
});

Route::view('store', 'storeUser');
Route::post('storecontroller', [StoreController::class, 'storeMember']);

Route::view('upload','upload');
Route::post('upload', [UploadController::class, 'index']);

Route::view('add','addmember');
Route::post('add',[MembersController::class, 'addData']);

Route::get('memberindex', [MemberController::class, 'index']);
Route::get('list', [MemberController::class, 'list']);
Route::get('delete/{id}', [MemberController::class, 'delete']);
Route::get('edit/{id}', [MemberController::class, 'showData']);
Route::post('edit', [MemberController::class, 'update']);
Route::get('operation', [MemberController::class, 'operation']);
Route::get('mutator', [MemberController::class, 'mutator']);
Route::get('newindex', [MemberController::class, 'newindex']);
Route::view('operation','operation');

Route::get('lists', [UserController::class, 'operations']);

Route::get('getdata',[EmployeeController::class, 'getData']);

Route::get('new',[NewCOntroller::class, 'index']);

Route::get('deviceindex/{key:name}', [DeviceController::class, 'index']);
