<?php

namespace TecHour\Http\Controllers;

use Illuminate\Http\Request;
use TecHour\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = auth()->user()->id;
        // $user = User::find($id);
        return view('home');
    }
}
