<?php

namespace App\Http\Controllers\Backend;
use App\Traits\ImageUploadTrait;
use App\Models\Tender;
use App\DataTables\TendersDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    use ImageUploadTrait;


    public function index(TendersDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.tenders.index');
    }


    public function create()
    {
        return view('admin.pages.tenders.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'value' => ['required'],
            'preview_image' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'preview_image', 'uploads');
        $imagePath2 = $this->uploadImage($request, 'preview_image2', 'uploads'); // Add this line

        Tender::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'preview_image' => $imagePath,
            'preview_image2' => $imagePath2, // Add this line

            'date' => $request->input('date'),
            'value' => $request->input('value'),
            'status' => $request->input('status'),

        ]);

        $notification = array(
            'message' => 'Tenders Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('tenders-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $tenders = Tender::findOrFail($id);
        return view('admin.pages.tenders.edit', compact('tenders'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'preview_image' => ['nullable'],
            'date' => ['required'],
            'value' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $tenders = Tender::findOrFail($id);

        $imagePath = $this->updateImage($request, 'preview_image', 'uploads', $tenders->image);

        $data['preview_image'] = empty(!$imagePath) ? $imagePath : $tenders->preview_image;

        $imagePath2 = $this->updateImage($request, 'preview_image2', 'uploads', $tenders->preview_image2); // Add this line

        $data['preview_image2'] = empty(!$imagePath2) ? $imagePath2 : $tenders->preview_image2;

        Tender::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Tenders Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('tenders-admin.index')->with($notification);
    }


    public function destroy($id)
    {
        $event = Tender::findOrFail($id);
        $this->deleteImage($event->preview_image);
        $event->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
