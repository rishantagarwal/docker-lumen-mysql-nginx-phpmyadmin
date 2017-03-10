<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$app->get('/version', function () use ($app) {
//    return $app->version();
//    return "aa";
    $saleTable = new \App\Sale();
    return $saleTable::find(1);
//    $saleTable = new Sale();

});


//Route::resource('/questions', 'QuestionsController');
//Route::resource('/answers', 'AnswersController');
//Route::resource('/profiles', 'ProfilesController');
//
//Route::get('/authenticate', 'AuthenticateController@index');
//Route::post('/authenticate', 'AuthenticateController@auth');
