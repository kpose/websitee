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

Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
    return view('pages.index');
});

Route::get('/_home', [
	'uses'=>'userController@home',
	'as'=>'home'
	]);

 Route::post('/_signin', [
 	'uses'=>'postController@Signin',
 	'as'=>'signin']);

Route::get('/_signin',[
	'uses'=>'userController@signin',
	'as'=>'signin']);

 Route::get('/_Signin', function(){
 	return view('pages.index');
 });

 
 Route::get('/_signup', [
 	'uses'=>'postController@create',
 	'as'=>'create']);

 Route::post('/_signup', [
 	'uses'=>'postController@signup',
 	'as'=>'signup']);

 Route::get('/packages', function(){
 	return view('pages.choose_package');
 });

 Route::get('/packages', [
 	'uses'=>'userController@packages',
 	'as'=>'packages']);

 Route::get('/first_packages', [
 	'uses'=>'firstPackage@pay',
 	'as'=>'10package',
 	]);

 Route::get('/transact', [
 	'uses'=>'firstPackage@transact',
 	'as'=>'transact']);

 Route::get('/show_reciever', [
 	'uses'=>'firstPackage@show_reciever',
 	'as'=>'show_reciever',
 	]);

 Route::get('/show_payer', [
 	'uses'=>'firstPackage@ show_payer',
 	'as'=>' show_payer',
 	]);

 Route::get('/check_transact', [
 	'uses'=>'firstPackage@check_transact',
 	'as'=>'check_transact',
 	]);

 Route::get('/show_payer', [
 	'uses'=>'firstPackage@show_payer',
 	'as'=>'show_payer',
 	]);
 
 

 Route::get('/logout', [
 	'uses'=>'postController@logout',
 	'as'=>'logout']);
 
 Route::get('/confirm', [
	'uses'=>'buttonController@confirm',
	'as'=>'confirm'
]);

Route::get('/remove', [
	'uses'=>'buttonController@remove',
	'as'=>'remove'
]);

Route::	get('/eject', [
	'uses'=>'buttonController@eject',
	'as'=>'eject'
]);


Route::	get('/confirm_me', [
	'uses'=>'buttonController@confirm_me',
	'as'=>'confirm_me'
]);




////////
 
 Route::get('/packages2', [
 	'uses'=>'userController@packages2',
 	'as'=>'packages2']);

 
 Route::get('/transact2', [
 	'uses'=>'secondPackage@transact2',
 	'as'=>'transact2']);

 Route::get('/show_reciever2', [
 	'uses'=>'secondPackage@show_reciever2',
 	'as'=>'show_reciever2',
 	]);

 Route::get('/show_payer2', [
 	'uses'=>'secondPackage@show_payer2',
 	'as'=>' show_payer2',
 	'middleware'=>'auth']);

 Route::get('/check_transact2', [
 	'uses'=>'secondPackage@check_transact2',
 	'as'=>'check_transact2',
 	]);

 Route::get('/show_payer2', [
 	'uses'=>'secondPackage@show_payer2',
 	'as'=>'show_payer2',
 	]);
 
 

 Route::get('/logout', [
 	'uses'=>'postController@logout',
 	'as'=>'logout']);
 
 Route::get('/confirm2', [
	'uses'=>'buttonController2@confirm2',
	'as'=>'confirm2'
]);

Route::get('/remove2', [
	'uses'=>'buttonController2@remove2',
	'as'=>'remove2'
]);

Route::	get('/eject2', [
	'uses'=>'buttonController2@eject2',
	'as'=>'eject2'
]);



Route::	get('/confirm_me2', [
	'uses'=>'buttonController2@confirm_me2',
	'as'=>'confirm_me2'
]);

 Route::get('/second_packages2', [
 	'uses'=>'secondPackage@pay2',
 	'as'=>'20package']);

Route::get('/_frequent_ask_question',[
	'uses'=>'userController@faq',
	'as'=>'faq']);

Route::get('/_how_it_work',[
	'uses'=>'userController@how_work',
	'as'=>'how_work']);

Route::get('/_about_us',[
	'uses'=>'userController@about',
	'as'=>'about']);


////////////
Route::get('/packages5', [
 	'uses'=>'userController@packages5',
 	'as'=>'packages5']);

 
 Route::get('/transact5', [
 	'uses'=>'thirdPackage@transact5',
 	'as'=>'transact5']);

 Route::get('/show_reciever5', [
 	'uses'=>'thirdPackage@show_reciever5',
 	'as'=>'show_reciever5',
 	]);

 Route::get('/show_payer5', [
 	'uses'=>'thirdPackage@show_payer5',
 	'as'=>' show_payer5',
 	'middleware'=>'auth']);

 Route::get('/check_transact5', [
 	'uses'=>'thirdPackage@check_transact5',
 	'as'=>'check_transact5',
 	]);

 Route::get('/show_payer5', [
 	'uses'=>'thirdPack
 	age@show_payer5',
 	'as'=>'show_payer5',
 	]);
 
 
 
 Route::get('/confirm5', [
	'uses'=>'buttonController5@confirm5',
	'as'=>'confirm5'
]);

Route::get('/remove5', [
	'uses'=>'buttonController5@remove5',
	'as'=>'remove5'
]);

Route::	get('/eject5', [
	'uses'=>'buttonController5@eject5',
	'as'=>'eject5'
]);


Route::	get('/confirm_me5', [
	'uses'=>'buttonController5@confirm_me5',
	'as'=>'confirm_me5'
]);

 Route::get('/second_packages5', [
 	'uses'=>'thirdPackage@pay5',
 	'as'=>'50package']);

 
});
