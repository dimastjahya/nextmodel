<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pesan;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\Auth\AuthController;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guest())
        {
            return Redirect::to ('index');
        }

        else
        {   
            if(Auth::user()->tipe == "model")
            {
                $user   = Auth::user()->id;
                $model  = App\profile::where('id_model','=', $user )->first(); 
                 
                $pesans = App\pesan::all(); 
                return view('home',compact('model','pesans'));
            }
            else
            {
                $user  = Auth::user()->id;
                $model = App\agency::where('user_id','=', $user )->first(); 
                return view('home',compact('model'));
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Pesan();
        $user->name = $request->name;
        $user->user_id = $request->user_id;
        $user->pesan = $request->pesan;
        $user->save();
        return Redirect::to('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
