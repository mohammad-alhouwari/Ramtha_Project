<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function showAllNews()
    {
        $news=News::where('status',1)->get();
        return view('Pages.News.news', compact('news'));
    }
    public function showDetailsNews($id)
    {
        $news=News::where('status',1)->get();
        return view('Pages.News.news', compact('news'));
    }
}
