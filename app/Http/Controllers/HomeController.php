<?php

namespace admin_sfts_ru\Http\Controllers;

use admin_sfts_ru\Http\Requests;
use Illuminate\Http\Request;

use admin_sfts_ru\Models\Agpplgroup;

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
        $groups = Agpplgroup::all();
        return view('home', ['pplgroups' => $groups]);
    }
}
