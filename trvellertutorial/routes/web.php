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
    return redirect()->to('index');
//        Artisan::call('route:list');
//        $output = Artisan::output();
//
//    dd($output);
});

Route::get('check', function () {
    if(auth()->check()) {
        return auth()->user();
    }
    return 'I am Guest';
});


//Route::get('/index', function () {
//    return view('index');
//});

Route::get('/index', 'AgentController@guestindex')->name('guest.login');


Route::get('/tripmakeupload', function () {
    return view('tripmakeupload');
});





Route::get('/userblog', function (){
	return view('userblog');

});
Route::get('/userblogdetails', function (){
	return view('userblogdetails');

});
Route::get('/contact', function (){
        return view('contact');

});


Route::get('blog-index', 'BlogController@index')->name('blog.index');

Route::get('renter-index', 'RenterController@renterserviceshow')->name('renter.index');
Route::get('agent-index', 'AgentController@agenttripshow')->name('agent.index');

Route::get('renter-{id}-show', 'RenterController@singleService')->name('renter.singleService');
Route::get('agent-{id}-show', 'AgentController@singleTrip')->name('agent.singleTrip');




Route::group(['middleware' => 'guest'], function(){

    Route::get('login', ['as'=>'login','uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as'=> 'postlogin','uses' => 'Auth\LoginController@login']);
    Route::get('register', ['as'=>'register','uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('register', ['as'=>'postRegister','uses' => 'Auth\RegisterController@create']);
    Route::get('/congrats', function () {
        return view('congrats');
    });
});




Route::get('/home', 'HomeController@index')->name('home');

Route::get('/referrer/{username}', 'Auth\RegisterController@refer');
Route::get('/bkash', function () {
    return view('bKash');


});
Route::get('/amarpay', function () {
    return view('aamarPay');


});


Route::group(['middleware' => 'auth'], function () {

    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    Route::group(['middleware' => 'agent'], function () {

        Route::get('agentlogin', 'AgentController@index')->name('agent.login');
        Route::get('agentcreate', 'AgentController@create')->name('agent.create');
        Route::post('agentindex', 'AgentController@store')->name('agent.store');


    });

    Route::group(['middleware' => 'renter'], function () {




    });
    Route::get('renterlogin', 'RenterController@index')->name('renter.login');
    Route::get('rentercreate', 'RenterController@create')->name('renter.create');
    Route::post('renterindex', 'RenterController@store')->name('renter.store');


});