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

// //トップ画面
// Route::get('/', function () {
//     return view('welcome');
// });

// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::group(['middleware' => ['auth']], function (){
    //ポイントのコントローラ
    Route::resource('points' , 'PointsController', ['only' => ['index','show']]);
    
    //メッセージのコントローラ
    Route::resource('messages' , 'MessagesController');
    
    //messagecreatepointのルーティング
    Route::get('/messages/{point}/create' ,  'MessagesController@createPointMessage')->name('messages.get');
    Route::post('/messages/{point}/create' , 'MessagesController@createMessage')->name('messages.post');
    
    
   
    Route::get('/','PointsController@index');

    
});



