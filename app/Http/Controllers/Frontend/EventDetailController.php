<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventParticipant;

class EventDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventdetal($id)
    {
        // $eventdetails=Event::all();
        $eventdetails = Event::where('status', 'on')->find($id);
        // $category = Category::find($product->category_id);

        $municipalityInfo = MunicipalityInfo::first();
        return view('Pages.Events.event_detail', compact('eventdetails', 'municipalityInfo'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $event_id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required'],
            'email' => ['required']
        ]);

        EventParticipant::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'event_id' => $event_id,
            'status' => 1,
        ]);

        $event = Event::findOrFail($event_id);

        $event->capacity--;

        $event->save();

        $municipalityInfo = MunicipalityInfo::first();
        return redirect()->back()->with([
            'status' => 'تم التسجيل بنجاح',
            'municipalityInfo' => $municipalityInfo
        ]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
