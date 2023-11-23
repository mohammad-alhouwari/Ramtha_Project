<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showAllProjects(Project $project)
    {
        $projects = Project::where('status', 'on')->get();
        return view('Pages.Projects.projects', compact('projects'));
    }


    public function showProject(Project $project, $id)
    {
        $project = Project::findOrFail($id);
        $projectImages = Media::where('project_id', $id)->where('status', 'on')->where('media_type', 'image')->get();
        $allProjects = Project::where('id', '!=', $id)->get();
        return view('Pages.Projects.single-project', compact('project', 'projectImages', 'allProjects'));
    }
}
