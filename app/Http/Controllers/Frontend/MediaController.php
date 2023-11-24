<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Project;
use App\Models\Event;
use App\Models\Landmark;


class MediaController extends Controller
{
    public function showGallery()
    {
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

        return view('Pages.Gallery.gallery', compact('uniqueGallery'));
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
        return view('Pages.Gallery.single_gallery', compact('gallery', 'name'));
    }
}
