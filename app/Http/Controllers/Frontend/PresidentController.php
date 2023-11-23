<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        $president = President::get()->first();
        // dd($president);
        return view('Pages.President', compact('president'));
    }
}
