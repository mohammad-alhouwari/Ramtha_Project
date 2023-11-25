<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use App\Models\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function showAllTenders()
    {
        $municipalityInfo=MunicipalityInfo::first();
        $tenders = Tender::where('status', 'on')->get();
        return view('Pages.tenders.tenders', compact('tenders','municipalityInfo'));
    }


    public function showDetailsTenders($id)
    {
        $municipalityInfo=MunicipalityInfo::first();
        $tenders = Tender::where('id', $id)->where('status', 'on')->first();
        return view('Pages.tenders.tendersDetailes', compact('tenders','municipalityInfo'));
    }
}
