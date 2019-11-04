<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ourship;
use App\opportunies;
use App\newsfeed;
use App\User;
use App\Visitor;
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
        $ships = Ourship::all();
        $opportunity = opportunies::all();
        $newsfeed = newsfeed::all();
        $user = User::orderBy('id','DESC')->paginate(10);
        $visit=Visitor::first();
        return view('home', compact('ships','opportunity','newsfeed','user','visit'));
    }

}
