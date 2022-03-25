<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\JobImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //

    public function index()
    {
        return view('job.jobs', [
            "jobs" => Job::latest()->take(4)->get(),
            "all_jobs" => Job::all(),
            "users" => User::where('is_freelancer', true)->get(),
            "categories" => Category::all(),
        ]);
    }

    public function allJobs()
    {
        // if(request('author')) {
        //     $freelancer = User::firstWhere('username', request('freelancer'));
        // }

        return view('job.alljobs', [
            "jobs" => Job::latest()->filter(request(['search', 'freelancer']))->get(),
            "users" => User::where('is_freelancer', true)->get(),
            "categories" => Category::all(),
        ]);
    }

    public function show(Job $job)
    {
        return view('job.job', [
            "job" => $job,
            "job_images" => JobImage::where('job_id', $job->id)->get(),
            "categories" => Category::all(),
        ]);
    }
}
