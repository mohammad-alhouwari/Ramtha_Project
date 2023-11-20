<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class NewController extends Controller
{
    public function showAllNews()
    {
        $news = News::where('status', 1)->get();
        return view('Pages.News.news', compact('news'));
    }
    public function showDetailsNews($id)
    {
        $news = News::where('id', $id)->where('status', 1)->first();
        $latestNews = News::where('created_at', '>', Carbon::now()->subDays(3))
            ->where('status', 1)->where('id','!=',$id)
            ->take(3)
            ->get();
        return view('Pages.News.newsDetails', compact('news', 'latestNews'));
    }
}
