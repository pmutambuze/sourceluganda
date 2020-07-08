<?php

namespace App\Http\Controllers;

use App\Member;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the admin application  dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the website home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $members = Member::all();
        return view('pages.home', compact('members'));
    }
}
