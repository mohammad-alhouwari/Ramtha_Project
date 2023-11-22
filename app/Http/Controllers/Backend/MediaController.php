<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\DataTables\MediaDataTable;
use App\Models\Media;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    use ImageUploadTrait;


    public function index(MediaDataTable $dataTables, Request $request)
    {
        $projectId = $request->get('project_id');

        $dataTables->setProjectId($projectId);

        return $dataTables->render('admin.pages.medias.index', compact('projectId'));
    }


    public function create($project_id)
    {
        return view('admin.pages.medias.create', compact('project_id'));
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'media' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'media', 'uploads');

        Media::create([
            'project_id' => $request->input('project_id'),
            'media_type' => 'image',
            'media' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Media Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('medias-admin.index', ['project_id' => $request->input('project_id')])->with($notification);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $media = Media::findOrFail($id);
        return view('admin.pages.medias.edit', compact('media'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'media' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $media = Media::findOrFail($id);

        $imagePath = $this->updateImage($request, 'media', 'uploads', $media->media);

        $data['media'] = empty(!$imagePath) ? $imagePath : $media->media;

        Media::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Project Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('medias-admin.index', ['project_id' => $media->project_id])->with($notification);
    }


    public function destroy($id)
    {
        $media = Media::findOrFail($id);
        $this->deleteImage($media->media);
        $media->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
    public function showAllMedia(){
        $gallery= Media::with('project','event','news')->get();
        dd($gallery);
     return view('admin.pages.', compact('gallery'));
    }
}
