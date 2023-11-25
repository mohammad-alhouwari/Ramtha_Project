<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\MunicipalityInfo;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Carbon;

class JobController extends Controller
{

    public function showAllJobs()
    {
        $municipalityInfo=MunicipalityInfo::first();
        $jobs = Job::where('status', 'on')->get();
        return view('Pages.jobs.jobs', compact('jobs','municipalityInfo'));
    }

    public function showJob(Job $job, $id)
    {
        $municipalityInfo=MunicipalityInfo::first();
        $latestJobs = Job::where('created_at', '>', Carbon::now()->subDays(3))
        ->where('status', 'on')->where('id', '!=', $id)
        ->take(3)
        ->get();
        $job = Job::findOrFail($id);
        return view('Pages.jobs.single-job', compact('job', 'latestJobs','municipalityInfo'));
    }

}
