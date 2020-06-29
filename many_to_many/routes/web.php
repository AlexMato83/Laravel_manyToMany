<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeeController@index')->name('home');
Route::get('/show/{id}', 'EmployeeController@show')->name('show');
Route::get('/edit/{id}', 'EmployeeController@edit')->name('edit');
Route::post('/update/{id}', 'EmployeeController@update')->name('update');
Route::get('/delete/{id}', 'EmployeeController@delete')->name('delete');
