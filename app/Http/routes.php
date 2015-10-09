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
Route::get('/', function () {
    return view('index');
});

Route::get('profile', function () {
    if(Auth::user()->tipe == "model")
    {
    	return view('profile');
	}
	else
	{
		return view('agency');
	}
    
});

Route::get('home', function () {

	if(Auth::guest())
	{
		return Redirect::to ('index');
	}

	else
	{
    	$user = Auth::user()->id;
    	$model = App\profile::where('id_model','=', $user )->first(); 
    	return view('home',compact('model'));
	}	
});
// Route::get('/', function()
// {
//     return View::make('register');
// });

// Route::post('/register', function()
// {
//     var_dump($_POST);
// });

// Route::post('/register', function()
// {
//     // 1. setting validasi
//     $validator = Validator::make(
//         Input::all(),
//         array(
//             "email"                 => "required|email|unique:users,email",
//             "password"              => "required|min:6",
//             "password_confirmation" => "same:password",
//         )
//     );

//     // 2a. jika semua validasi terpenuhi simpan ke database
//      if($validator->passes())
// 	{
// 	    $user = new User;
// 	    $user->email    = Input::get('email');
// 	    $user->password = Hash::make(Input::get('password'));
// 	    $user->save();

// 	    return Redirect::to("register")->with('register_success', 'Selamat, Anda telah resmi menjadi pengangguran, silakan cek email untuk aktivasi :P');
// 	}
//     // 2b. jika tidak, kembali ke halaman form registrasi
//     else
//     {
//         return Redirect::to('register')
//             ->withErrors($validator)
//             ->withInput();
//     }

   

// });

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Profile routes
//Route::get ('profile', 'Auth\profileController@create');
Route::post('profile', 'profileController@store');
Route::post('agency', 'agencyController@store');


