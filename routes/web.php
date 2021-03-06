<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'],function(){

    Route::get('/questions','QuestionsController@index');

    Route::get('/questions/create','QuestionsController@create');

    Route::get('/questions/create','QuestionsController@create');

    Route::post('/questions','QuestionsController@store');

    Route::get('/questions/{question}/edit','QuestionsController@edit');

    Route::patch('/questions/{question}','QuestionsController@update');

    Route::post('/questions/{question}/answers','QuestionAnswersController@store');

    Route::patch('/answers/{answer}','QuestionAnswersController@update');


});


