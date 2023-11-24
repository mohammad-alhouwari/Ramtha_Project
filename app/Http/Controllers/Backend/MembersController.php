<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\MembersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MembersDataTable $dataTable)
    {
        return $dataTable->render('admin.pages.members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'image' => ['required', 'image', 'max:4192'],
            'position' => ['required', 'string'],
            'status' => ['required'],
        ]);

        $member = new Member();

        $imagePath = $this->uploadImage($request, 'image', 'uploads');
        $member->image = $imagePath;
        $member->name = $request->name;
        $member->position = $request->position;
        $member->status = $request->status;
        $member->save();

        $notification = array(
            'message' => 'Member Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('members-admin.index')->with($notification);
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
        $member = Member::findOrFail($id);
        return view('admin.pages.members.edit', compact('member'));
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
        $request->validate([
            'name' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:4192'],
            'position' => ['required', 'string'],
            'status' => ['required'],
        ]);

        $member = Member::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $member->image);
        $member->image = empty(!$imagePath) ? $imagePath : $member->image;
        $member->name = $request->name;
        $member->position = $request->position;
        $member->status = $request->status;
        $member->save();

        $notification = array(
            'message' => 'Member Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('members-admin.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $this->deleteImage($member->image);
        $member->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
