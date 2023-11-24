<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\DataTables\PollTopicDataTable;
use App\DataTables\PollDataTable;
use App\Models\PollTopic;
use App\Models\Poll;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;


class PollTopicController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PollTopicDataTable $dataTables)
    {
        return $dataTables->render('admin.pages.pollTopics.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.pollTopics.create');
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
            'end_date' => ['required', 'date', 'after:now'],
            'image' => ['nullable'],
        ]);

        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        PollTopic::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'end_date' => $request->input('end_date'),
            'image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Poll Topic Created Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('pollTopics-admin.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PollTopic  $pollTopic
     * @return \Illuminate\Http\Response
     */
    // public function show(PollTopic $pollTopic)
    // public function show($id)
    // {
    //     $pollTopic = PollTopic::findOrFail($id);
    //     $dataTable = new PollDataTable();
    //     return $dataTable->render('admin.pages.pollTopics.show', ['pollTopic' => $pollTopic]);
    // }
    public function show($id)
    {
        $pollTopic = PollTopic::findOrFail($id);
        $polls = Poll::get()->where('poll_topic_id', $pollTopic->id);
        return view('admin.pages.pollTopics.show', compact('pollTopic', 'polls'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PollTopic  $pollTopic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pollTopic = PollTopic::findOrFail($id);
        return view('admin.pages.pollTopics.edit', compact('pollTopic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PollTopic  $pollTopic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Data Validate
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'end_date' => ['required', 'date', 'after:now'], 
            'image' => ['nullable'],
        ]);

        $data = $request->except(['_token', '_method']);

        $PollTopic = PollTopic::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $PollTopic->image);

        $data['image'] = empty(!$imagePath) ? $imagePath : $PollTopic->image;

        PollTopic::where('id', $id)->update($data);

        $notification = array(
            'message' => 'Poll Topic Updated Successfully!!',
            'alert-type' => 'success',
        );

        return redirect()->route('pollTopics-admin.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PollTopic  $pollTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $PollTopic = PollTopic::findOrFail($id);
        $this->deleteImage($PollTopic->image);
        $PollTopic->delete();
        return response(['status' => 'success', 'message' => 'Poll Topic Deleted Successfully!']);
    }
}
