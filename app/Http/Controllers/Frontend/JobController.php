<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Carbon;

class JobController extends Controller
{

    public function showAllJobs()
    {
        $jobs = Job::where('status', 'on')->get();
        return view('Pages.jobs.jobs', compact('jobs'));
    }

    public function showJob(Job $job, $id)
    {
        $latestJobs = Job::where('created_at', '>', Carbon::now()->subDays(3))
        ->where('status', 'on')->where('id', '!=', $id)
        ->take(3)
        ->get();
        $job = Job::findOrFail($id);
        return view('Pages.jobs.single-job', compact('job', 'latestJobs'));
    }

}
