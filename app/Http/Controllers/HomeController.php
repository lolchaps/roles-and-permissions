<?php

namespace App\Http\Controllers;

use Gate;
use App\Http\Requests;
use Illuminate\Http\Request;

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

        /* Via The Gate Facade */
        if (Gate::denies('home_uri')) {
            abort(403, 'You cannot access this page' );
        }

        /* Via Controller Authorization */
        // $this->authorize('home_uri');

        return view('home');
    }
}
