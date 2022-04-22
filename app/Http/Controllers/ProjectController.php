<?php

namespace App\Http\Controllers;

use App\Hardskills;
use App\Involved;
use App\InvolvedProjects;
use App\Involvement;
use App\Learnt;
use App\Project;
use App\Softskills;
use Illuminate\Http\Request;
use Json;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show($id)
    {
        $projectmixed = InvolvedProjects::where('projects_id', $id)->with('involveds')->with('projects')->get();
        $learnt = Learnt::with('projects')->where('projects_id', $id)->get();
        $softskills =   Softskills::with('projects')->where('projects_id', $id)->get();
        $hardskills = Hardskills::with('projects')->where('projects_id', $id)->get();
        $involvement = Involvement::with('projects')->where('projects_id', $id)->get();
        $project = compact('projectmixed', 'learnt', 'hardskills', 'softskills', 'involvement');
        //dd($project);
        return view('project', $project);

    }
}
