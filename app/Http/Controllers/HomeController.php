<?php

namespace App\Http\Controllers;

use App\Info;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $lists = Info::orderBy("id", "desc")->paginate();


        return view('home', compact("lists"));
    }
}
