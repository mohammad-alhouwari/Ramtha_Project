<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\DataTables\MunicipalityInfoDataTable;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use App\Models\MunicipalityInfo;

class MunicipalityInfoController extends Controller
{

    use ImageUploadTrait;
    public function index(MunicipalityInfoDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.municipalityInfo.index');
    }

    public function create()
    {
        return view('admin.pages.municipalityInfo.create');
    }

    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'description' => ['required', 'string', 'max:255'],
            'description_image' => ['required', 'string', 'max:255'],
            'logo' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
        ]);

        $logoPath = $this->uploadImage($request, 'logo', 'uploads');
        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        MunicipalityInfo::create([
            'description' => $request->input('description'),
            'description_image' => $imagePath,
            'logo' => $logoPath,
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        $notification = array(
            'message' => 'Job Opportunity Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('admin.pages.municipalityInfo.index')->with($notification);
    }
}
