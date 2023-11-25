<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use Illuminate\Support\Facades\DB;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Project;
use App\Models\Event;
use App\Models\Landmark;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;



class MediaController extends Controller
{
    public function showGallery()
    {
        $municipalityInfo=MunicipalityInfo::latest()->first();
        $gallery = Media::with('project', 'event', 'news')->get();

        // Filter out duplicate media based on event_id, news_id, or project_id
        $uniqueGallery = collect([]);
        $uniqueProjects = collect([]);
        $uniqueEvents = collect([]);
        $uniqueNews = collect([]);

        foreach ($gallery as $item) {
            if ($item->project && !$uniqueProjects->contains('id', $item->project->id)) {
                $uniqueProjects->push($item->project);
                $uniqueGallery->push($item);
            } elseif ($item->event && !$uniqueEvents->contains('id', $item->event->id)) {
                $uniqueEvents->push($item->event);
                $uniqueGallery->push($item);
            } elseif ($item->news && !$uniqueNews->contains('id', $item->news->id)) {
                $uniqueNews->push($item->news);
                $uniqueGallery->push($item);
            }
        }
    
        // Paginate the uniqueGallery collection with 2 items per page
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 9;
        $currentPageItems = $uniqueGallery->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedGallery = new LengthAwarePaginator($currentPageItems, $uniqueGallery->count(), $perPage);
    
        // Set path for paginator if needed
        $paginatedGallery->setPath('gallery');
    

        return view('Pages.Gallery.gallery', compact('paginatedGallery','municipalityInfo'));
    }



    // public function showSingleGallery($id, $type)
    // {
    //     if ($type == 'project') {
    //         $gallery = Media::where('project_id', $id)->with('project')->get();
    //         $name=Project::find($id);
    //         return view('Pages.Gallery.single_gallery', compact('gallery','name'));
    //     }
    //     else if ($type == 'event') {
    //         $gallery = Media::where('event_id', $id)->with('event')->get();
    //         $name=Event::find($id);
    //         return view('Pages.Gallery.single_gallery', compact('gallery','name'));
    //     }
    //    else if ($type == 'news') {
    //         $gallery = Media::where('news_id', $id)->with('news')->get();
    //         $name=News::find($id);
    //         return view('Pages.Gallery.single_gallery', compact('gallery','name'));
    //     }


    // }
    public function showSingleGallery($id, $type)
    {
        $gallery = [];
        $name = null;

        if ($type == 'project') {
            $name = Project::find($id);
            if ($name) {
                $gallery = Media::where('project_id', $id)->get();
            }
        } elseif ($type == 'event') {
            $name = Event::find($id);
            if ($name) {
                $gallery = Media::where('event_id', $id)->get();
            }
        } elseif ($type == 'news') {
            $name = News::find($id);
            if ($name) {
                $gallery = Media::where('news_id', $id)->get();
            }
        }
        $municipalityInfo=MunicipalityInfo::latest()->first();
        return view('Pages.Gallery.single_gallery', compact('gallery', 'name','municipalityInfo'));
    }
}
