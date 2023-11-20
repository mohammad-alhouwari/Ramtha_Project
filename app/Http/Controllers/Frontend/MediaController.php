<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Project;
use App\Models\Event;
use App\Models\Landmark;


class MediaController extends Controller
{
    public function showGallery(){

     $gallery= Media::with();
     return view('Pages.Gallery.gallery', compact('gallery'));

    }
}
