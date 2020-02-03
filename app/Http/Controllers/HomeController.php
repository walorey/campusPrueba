<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\File;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $archivos = File::orderBy('id','DESC')->paginate(20);
        return view('home')->with('archivos', $archivos);
    }
}
