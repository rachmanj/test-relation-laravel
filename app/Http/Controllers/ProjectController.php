<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return $projects;
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $project = new Project();

        $project->project_code = $request->project_code;
        $project->project_name = $request->project_name;
        $project->project_bowheer = $request->project_bowheer;

        $project->save();
    }
}
