<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\MunicipalityInfo;
use App\Models\Project;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showAllProjects(Project $project)
    {
        $municipalityInfo=MunicipalityInfo::latest()->first();
        $projects = Project::where('status', 'on')->paginate(6);
        return view('Pages.Projects.projects', compact('projects','municipalityInfo'));
    }


    public function showProject(Project $project, $id)
    {
        $municipalityInfo=MunicipalityInfo::latest()->first();
        $project = Project::findOrFail($id);
        $projectImages = Media::where('project_id', $id)->where('status', 'on')->where('media_type', 'image')->get();
        $latestProjects = Project::where('status', 'on')->where('id', '!=', $id)
            ->take(3)
            ->get();
        return view('Pages.Projects.single-project', compact('project', 'projectImages', 'latestProjects','municipalityInfo'));
    }
}
