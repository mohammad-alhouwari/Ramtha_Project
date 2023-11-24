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

        $existingRecord = MunicipalityInfo::first();

        if ($existingRecord) {
            $notification = [
                'message' => 'A record already exists. Cannot create a new one.',
                'alert-type' => 'error',
            ];
    
            return redirect()->route('municipality-info-admin.index')->with($notification);
        }

        // Data Validate
        $request->validate([
            'description' => ['required', 'string', 'max:255'],
            'vision' => ['required', 'string', 'max:255'],
            'mission' => ['required', 'string', 'max:255'],
            'description_image' => ['required'],
            'logo' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
        ]);

        $logoPath = $this->uploadImage($request, 'logo', 'uploads');
        $imagePath = $this->uploadImage($request, 'description_image', 'uploads');

        MunicipalityInfo::create([
            'description' => $request->input('description'),
            'vision' => $request->input('vision'),
            'mission' => $request->input('mission'),
            'description_image' => $imagePath,
            'logo' => $logoPath,
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        $notification = array(
            'message' => 'Job Opportunity Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('municipality-info-admin.index')->with($notification);
    }

    public function edit($id)
    {
        $municipalityInfo = MunicipalityInfo::findOrFail($id);
        return view('admin.pages.municipalityInfo.edit', compact('municipalityInfo'));
    }

    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'description' => ['required', 'string', 'max:255'],
            'mission' => ['required', 'string', 'max:255'],
            'vision' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $municipalityInfo = MunicipalityInfo::findOrFail($id);

        $imagePath = $this->updateImage($request, 'description_image', 'uploads', $municipalityInfo->description_image);
        $logoPath = $this->updateImage($request, 'logo', 'uploads', $municipalityInfo->logo);

        $data['description_image'] = empty(!$imagePath) ? $imagePath : $municipalityInfo->description_image;
        $data['logo'] = empty(!$logoPath) ? $logoPath : $municipalityInfo->logo;

        MunicipalityInfo::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Municipality Info Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('municipality-info-admin.index')->with($notification);
    }

}
