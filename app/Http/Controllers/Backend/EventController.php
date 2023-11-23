<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\EventDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploadTrait;
use App\Models\Event;


class EventController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EventDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.events.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.events.create');
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'preview_image' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'status' => ['required'],
        ]);

        $imagePath = $this->uploadImage($request, 'preview_image', 'uploads');

        Event::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'location' => $request->input('location'),
            'capacity' => $request->input('capacity'),
            'status' => $request->input('status'),
            'preview_image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Event Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('Events-admin.index')->with($notification);
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
        $event = Event::findOrFail($id);
        return view('admin.pages.events.edit', compact('event'));
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
            'description' => ['required', 'string'],
            'preview_image' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'location' => ['required'],
            'status' => ['required'],
        ]);

        $data = $request->except(['_token', '_method']);

        $event = Event::findOrFail($id);

        $imagePath = $this->updateImage($request, 'preview_image', 'uploads', $event->preview_image);

        $data['preview_image'] = empty(!$imagePath) ? $imagePath : $event->preview_image;

        Event::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Event opportunities Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('Events-admin.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $this->deleteImage($events->preview_image);
        $events->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
