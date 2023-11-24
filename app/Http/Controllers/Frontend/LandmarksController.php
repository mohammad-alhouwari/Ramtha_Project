<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Landmark;
use App\Models\Media;
use Illuminate\Http\Request;

class LandmarksController extends Controller
{
    public function showAllLandmarks(Landmark $landmark)
    {
        $landmarks = Landmark::where('status', 'on')->paginate(6);
        return view('Pages.Landmarks.landmarks', compact('landmarks'));
    }


    public function showLandmark(Landmark $Landmark, $id)
    {
        $landmark = Landmark::findOrFail($id);
        $landmarkImages = Media::where('landmark_id', $id)->where('status', 'on')->where('media_type', 'image')->get();
        return view('Pages.Landmarks.single-landmark', compact('landmark', 'landmarkImages'));
    }
}
