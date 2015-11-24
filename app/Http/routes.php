<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/index',['as'=>'index',function(){
   return view('index');
}]);
Route::get('/',function(){
    return view('index');
});
Route::get('/company',['as'=>'company',function(){
    return view('company');
}]);
Route::get('/support',['as'=>'support',function(){
    return view('support');
}]);
Route::controller('auth','UsersController');
Route::resource('test','TestController');
Route::get('/bootstrap',function(){
    return view('bootstrap');
});
Route::get('/image',function(){
    return view('image');
});
