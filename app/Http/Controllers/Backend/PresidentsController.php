<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\PresidentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\President;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class PresidentsController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PresidentsDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.presidents.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.presidents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Data Validate
        $request->validate([
            'image' => ['required', 'image', 'max:4192'],
            'name' => ['required', 'string'],
            'speech' => ['required', 'max:200'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        President::create([
            'image' => $imagePath,
            'name' => $request->input('name'),
            'speech' => $request->input('speech'),
        ]);

        $notification = array(
            'message' => 'President Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('presidents-admin.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $president = President::findOrFail($id);
        return view('admin.pages.presidents.edit', compact('president'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'image' => ['nullable', 'image', 'max:4192'],
            'name' => ['required', 'string'],
            'speech' => ['required', 'max:200'],
        ]);

        $president = President::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $president->image);

        $president->image = empty(!$imagePath) ? $imagePath : $president->image;
        $president->name = $request->name;
        $president->speech = $request->speech;
        $president->save();

        $notification = array(
            'message' => 'President Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('presidents-admin.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $president = President::findOrFail($id);
        $this->deleteImage($president->image);
        $president->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
