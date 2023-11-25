<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use App\Models\MunicipalityInfo;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function showAllInvestments(Investment $investments)
    {
        $investments = Investment::get();
        $municipalityInfo=MunicipalityInfo::first();
        return view('Pages.Investments.investments', compact('investments','municipalityInfo'));
    }


    public function showInvestment(Investment $investment, $id)
    {
        $municipalityInfo=MunicipalityInfo::first();
        $investment = Investment::findOrFail($id);
        return view('Pages.Investments.investment-opportunity', compact('investment','municipalityInfo'));
    }
}
