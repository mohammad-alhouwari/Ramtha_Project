<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\DataTables\NewsDataTable;

class NewController extends Controller
{
    use ImageUploadTrait;


    public function index(NewsDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.news.index');
    }


    public function create()
    {
        return view('admin.pages.news.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'preview_image' => ['required'],
            'date' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'preview_image', 'uploads');

        News::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'preview_image' => $imagePath,
            'date' => $request->input('date'),
            'status' => $request->input('status'),

        ]);

        $notification = array(
            'message' => 'News Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('news-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.pages.news.edit', compact('news'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'preview_image' => ['nullable'],
            'date' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $news = News::findOrFail($id);

        $imagePath = $this->updateImage($request, 'preview_image', 'uploads', $news->image);

        $data['preview_image'] = empty(!$imagePath) ? $imagePath : $news->preview_image;

        News::where('id', $id)->update($data);

        $notification = array(
            'message' => 'News Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('news-admin.index')->with($notification);
    }


    public function destroy($id)
    {
        $event = News::findOrFail($id);
        $this->deleteImage($event->preview_image);
        $event->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
