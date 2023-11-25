<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\MunicipalityInfo;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $municipalityInfo = MunicipalityInfo::latest()->first();

        return view('Pages.about-municipality', compact('members', 'municipalityInfo'));
    }
    public function organizationalChart(){
        $municipalityInfo=MunicipalityInfo::latest()->first();
        return view('Pages.Organizational-Chart',compact('municipalityInfo'));
    }
}
