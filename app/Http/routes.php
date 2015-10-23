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
Route::get('gall', function () {
    return view('gallery');
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
		 return view('index');
	}

	else
	{   
		if(Auth::user()->tipe == "model")
	    {
	    	$user   = Auth::user()->id;
	    	$model  = App\profile::where('id_model','=', $user )->first();  
	    	//$pesans = App\pesan::all();
            $pesans = DB::table('pesans')
                ->orderBy('id', 'desc')
                ->get();
	    	return view('home',compact('model','pesans'));
	    }
	    else
	    {
	    	$user  = Auth::user()->id;
	    	$model = App\agency::where('user_id','=', $user )->first(); 
	    	return view('home',compact('model'));
	    }
	}	
});

Route::get('profile', function () {

	if(Auth::guest())
	{
		 return view('index');
	}

	else
	{   
		if(Auth::user()->tipe == "model")
	    {
	    	$user   = Auth::user()->id;
	    	$model  = App\profile::where('id_model','=', $user )->first();  
	    	//$pesans = App\pesan::all();
            $pesans = DB::table('pesans')
                ->orderBy('id', 'desc')
                ->get();
	    	return view('profile',compact('model','pesans'));
	    }
	    else
	    {
	    	$user  = Auth::user()->id;
	    	$model = App\agency::where('user_id','=', $user )->first(); 
	    	return view('profile',compact('model'));
	    }
	}	
});

Route::get('profile/view/{id}', 'profileController@view');
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
Route::get('auth/register', 'GalleryController@galleryList');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Profile routes
//Route::get ('profile', 'Auth\profileController@create');
Route::post('profile/edit', 'profileController@store');
Route::post('agency', 'agencyController@store');
Route::post('pesan', 'PesanController@store');

Route::get('galleryku', 'GalleryController@galleryList');
Route::get('gallery/list', 'GalleryController@galleryList');
Route::post('galleryku/save', 'GalleryController@saveGallery');
Route::get('galleryku/view/{id}', 'GalleryController@viewGalleryPics');
Route::post('image/upload', 'GalleryController@imageUpload');
Route::get('image/upload', function () {
    return view('gallery-view.blade');
});
