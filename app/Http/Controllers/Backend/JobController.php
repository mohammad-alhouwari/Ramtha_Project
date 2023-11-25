<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\JobDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use App\Models\Job;




class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use ImageUploadTrait;
    public function index(JobDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jobs.create');
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
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        Job::create([
            'title' => $request->input('name'),
            'image' => $imagePath,
            'status' => 'on',
        ]);

        $notification = array(
            'message' => 'Job Opportunity Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('jobs-admin.index')->with($notification);
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
        $job = Job::findOrFail($id);
        return view('admin.pages.jobs.edit', compact('job'));
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
            'title' => ['required', 'string', 'max:255'],
        ]);

        $data = $request->except(['_token', '_method']);

        $job = Job::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $job->image);

        $data['image'] = empty(!$imagePath) ? $imagePath : $job->image;

        Job::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Job Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('jobs-admin.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $this->deleteImage($job->image);
        $job->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
