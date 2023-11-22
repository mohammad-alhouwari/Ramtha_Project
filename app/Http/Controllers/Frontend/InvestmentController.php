<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function showAllInvestments(Investment $investments)
    {
        $investments = Investment::get();
        return view('Pages.Investments.investments', compact('investments'));
    }


    public function showInvestment(Investment $investment, $id)
    {
        $investment = Investment::findOrFail($id);
        return view('Pages.Investments.investment-opportunity', compact('investment'));
    }
}
