<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\MunicipalityInfo;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewController extends Controller
{
    public function showAllNews()
    {
        $news = News::where('status', 'on')->paginate(6);
        $municipalityInfo=MunicipalityInfo::first();
        return view('Pages.News.news', compact('news','municipalityInfo'));
    }


    public function showDetailsNews($id)
    {
        $news = News::where('id', $id)->where('status', 'on')->first();

        if (!$news) {
            abort(404);
        }
        $newsImages = Media::where('news_id', $id)->where('status', 'on')->where('media_type', 'image')->get();

        $latestNews = News::where('created_at', '>', Carbon::now()->subDays(3))
            ->where('status', 'on')->where('id', '!=', $id)
            ->take(3)
            ->get();
            $municipalityInfo=MunicipalityInfo::first();
        return view('Pages.News.newsDetails', compact('news', 'latestNews', 'newsImages','municipalityInfo'));
    }
}
