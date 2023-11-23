<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{

    public function showAllJobs()
    {
        $jobs = Job::all();
        return view('Pages.jobs.jobs', compact('jobs'));
    }

    public function showJob(Job $job, $id)
    {
        $investment = Job::findOrFail($id);
        return view('Pages.jobs.single-job', compact('job'));
    }

}
