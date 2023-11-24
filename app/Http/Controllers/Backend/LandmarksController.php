<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\LandmarkDataTable;
use App\Http\Controllers\Controller;
use App\Models\Landmark;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class LandmarksController extends Controller
{
    use ImageUploadTrait;


    public function index(LandmarkDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.landmarks.index');
    }


    public function create()
    {
        return view('admin.pages.landmarks.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'location' => ['required'],
            'preview_image' => ['required'],
            'status' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'preview_image', 'uploads');

        Landmark::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'preview_image' => $imagePath,
            'status' => $request->input('status'),
        ]);

        $notification = array(
            'message' => 'Project Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('landmarks-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $landmark = Landmark::findOrFail($id);
        return view('admin.pages.landmarks.edit', compact('landmark'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'location' => ['required'],
            'preview_image' => ['nullable'],
        ]);

        $data = $request->except(['_token', '_method']);

        $landmark = Landmark::findOrFail($id);

        $imagePath = $this->updateImage($request, 'preview_image', 'uploads', $landmark->image);

        $data['preview_image'] = empty(!$imagePath) ? $imagePath : $landmark->preview_image;

        Landmark::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Landmark Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('landmarks-admin.index')->with($notification);
    }

    public function destroy($id)
    {
        try {
            $landmark = Landmark::findOrFail($id);
            $this->deleteImage($landmark->preview_image);
            $landmark->delete();


            return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
        } catch (\Exception $e) {
            Log::error("Error deleting landmark: {$e->getMessage()}");
            return response(['status' => 'error', 'message' => 'You Must have delete gallery first']);
        }
    }
}
