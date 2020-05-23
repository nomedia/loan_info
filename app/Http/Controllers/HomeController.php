<?php

namespace App\Http\Controllers;

use App\Exports\InfoExport;
use App\Info;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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


    public function export()
    {
        return Excel::download(new InfoExport, date("YmdHis").'登记用户.xlsx');
    }
}
