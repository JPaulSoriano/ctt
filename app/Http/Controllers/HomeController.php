<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeVisit;
use App\Tracing;

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
        $today = TimeVisit::whereDate('created_at', '=', date('Y-m-d'))->count();
        $scanned = TimeVisit::all()->count();
        $registrations = Tracing::all()->count();
        return view('home', compact('today', 'scanned', 'registrations'));
    }
}
