<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\InvestmentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;


class InvestmentController extends Controller
{
    use ImageUploadTrait;
    public function index(InvestmentDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.investments.index');
    }


    public function create()
    {
        return view('admin.pages.investments.create');
    }

    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        Investment::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Investment opportunities Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('investments-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $investment = Investment::findOrFail($id);
        return view('admin.pages.investments.edit', compact('investment'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image' => ['nullable'],
        ]);

        $data = $request->except(['_token', '_method']);

        $investment = Investment::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $investment->image);

        $data['image'] = empty(!$imagePath) ? $imagePath : $investment->image;

        Investment::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Investment opportunities Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('investments-admin.index')->with($notification);
    }


    public function destroy($id)
    {
        $investment = Investment::findOrFail($id);
        $this->deleteImage($investment->image);
        $investment->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
