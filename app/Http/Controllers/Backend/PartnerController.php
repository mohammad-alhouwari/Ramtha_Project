<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\DataTables\PartnersDataTable;

class PartnerController extends Controller
{
    use ImageUploadTrait;


    public function index(PartnersDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.partners.index');
    }


    public function create()
    {
        return view('admin.pages.partners.create');
    }


    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'logo' => ['required'],
            'link' => ['required'],

        ]);

        $imagePath = $this->uploadImage($request, 'logo', 'uploads');

        Partner::create([
            'logo' => $imagePath,
            'link' => $request->input('link'),
            'status' => $request->input('status'),

        ]);

        $notification = array(
            'message' => 'Partners Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('partners-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $partners = Partner::findOrFail($id);
        return view('admin.pages.partners.edit', compact('partners'));
    }


    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'logo' => ['required'],
            'link' => ['required', 'string'],
        ]);

        $data = $request->except(['_token', '_method']);

        $partners = Partner::findOrFail($id);

        $imagePath = $this->updateImage($request, 'logo', 'uploads', $partners->logo);

        $data['logo'] = empty(!$imagePath) ? $imagePath : $partners->logo;

        Partner::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Partners Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('partners-admin.index')->with($notification);
    }


    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $this->deleteImage($partner->logo);
        $partner->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}

