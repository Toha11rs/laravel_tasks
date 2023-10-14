<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::get('/', [UserController::class, 'main'])->name("user.main"); //главная страница
Route::get('users_api', [UserController::class, 'index']) ->name("user.index"); //поиск пользователей из api
Route::get('/users_api/search', [UserController::class, 'serach'])->name('user.search');

Route::get('user/create', [UserController::class, 'create']); //создание пользователя get
Route::post('user/create', [UserController::class, 'store']) ->name("user.store");//создание пользователя post

Route::get('allUsers', [UserController::class, 'Allusers']) ->name("user.AllUsers"); // вывод всех пользоватлей из бд

Route::delete('users/delete/{id}', [UserController::class, 'delete']) ->name("user.delete"); //удаление пользователей из бд






