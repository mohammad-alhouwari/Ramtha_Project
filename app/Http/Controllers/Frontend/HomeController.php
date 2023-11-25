<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use Illuminate\Http\Request;

use App\Models\President;
use App\Models\Event;
use App\Models\News;
use App\Models\Project;
use App\Models\Partner;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{

    public function index()
    {
        $presidents = President::latest()->get();
        $events = Event::latest()->get();
        $projects = Project::all();
        $latestNews = News::latest()->take(3)->get();
        $partners = Partner::get();
        $eventsCount = $events->count();
        $projectsCount = $projects->count();
 $municipalityInfo=MunicipalityInfo::latest()->first();

            return view('index', compact('presidents', 'events', 'latestNews', 'partners','municipalityInfo','eventsCount','projectsCount'));
        
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
    public function store(Request $request)
    {
        //
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
