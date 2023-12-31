<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Project;
use App\DataTables\ProjectDataTable;
use App\Models\Media;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    use ImageUploadTrait;


    public function index(ProjectDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.projects.index');
    }


    public function create()
    {
        return view('admin.pages.projects.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'percentage' => ['required', 'numeric', 'between:0,100'],
            'preview_image' => ['required'],
            'status'=>['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'preview_image', 'uploads');

        Project::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'percentage' => $request->input('percentage'),
            'preview_image' => $imagePath,
            'status'=>$request->input('status'),
        ]);

        $notification = array(
            'message' => 'Project Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('projects-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.pages.projects.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'percentage' => ['required', 'numeric', 'between:0,100'],
            'preview_image' => ['nullable'],
        ]);

        $data = $request->except(['_token', '_method']);

        $project = Project::findOrFail($id);

        $imagePath = $this->updateImage($request, 'preview_image', 'uploads', $project->image);

        $data['preview_image'] = empty(!$imagePath) ? $imagePath : $project->preview_image;

        Project::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Project Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('projects-admin.index')->with($notification);
    }


    public function addProjectPhotos($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.pages.projects.projectPhotos', compact('project'));
    }


    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $this->deleteImage($project->preview_image);
            $project->delete();


            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            Log::error("Error deleting project: {$e->getMessage()}");
            return response(['status' => 'error', 'message' => 'You Must have delete gallery first']);
        }
    }
}
