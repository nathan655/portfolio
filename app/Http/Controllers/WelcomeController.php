<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects  = Project::get();
        $c = compact('projects');
        return view('welcome', $c);
    }
}
