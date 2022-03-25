<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\JobImage;
use App\Models\User;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardJobController extends Controller
{
    //
    public function create()
    {
        // return 'success';
        return view('dashboard.job.create', [
            "user" => Auth::user(),
            "categories" => Category::all(),
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'slug' => 'unique:jobs',
            'description' => 'required',
            'category_id' => 'required',
            'job_style' => 'required',
            'file_format' => 'required',
            'package_name' => 'required',
            'package_description' => 'required',
            'job_delivery' => 'required',
            'revision' => 'required',
            'price' => 'required',
        ]);

        $user = Auth::user();

        $job = new Job;

        $job->user_id = $user->id;
        $job->category_id = $request['category_id'];
        $job->title = $request['title'];
        $job->slug = $request['slug'];
        $job->description = $request['description'];
        $job->job_style = $request['job_style'];
        $job->file_format = $request['file_format'];
        $job->package_name = $request['package_name'];
        $job->package_description = $request['package_description'];
        $job->job_delivery = $request['job_delivery'];
        $job->revision = $request['revision'];
        $job->price = $request['price'];

        $job->save();

        // Job::create([
        //     "user_id" => $user->id,
        //     "category_id" => $request['category_id'],
        //     "title" => $request['title'],
        //     "slug" => $request['slug'],
        //     "description" => $request['description'],
        //     "job_style" => $request['job_style'],
        //     "file_format" => $request['file_format'],
        //     "package_name" => $request['package_name'],
        //     "package_description" => $request['package_description'],
        //     "job_delivery" => $request['job_delivery'],
        //     "revision" => $request['revision'],
        //     "price" => $request['price'],
        // ]);

        if($request->hasFile('imgs')) {
            foreach($request->file('imgs') as $imageFile) {
                $img_path = $imageFile->store('images');
                JobImage::create([
                    "job_id" => $job->id,
                    "image" => $img_path,
                ]);
            }
        }

        User::where('id', $user->id)->update([
            "is_freelancer" => true,
        ]);

        return redirect("/profile/$user->username")->with('success', 'New Job has been added!');
    }

    public function edit(Job $job)
    {
        // $full_name = $user->first_name . " " . $user->last_name;
        return view('dashboard.job.edit', [
            "user" => Auth::user(),
            "job" => $job,
            "categories" => Category::all(),
        ]);
        // return $job;
    }

    public function update(Request $request, Job $job)
    {
        // return $request['slug'];
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required',
            'job_style' => 'required',
            'file_format' => 'required',
            'package_name' => 'required',
            'package_description' => 'required',
            'job_delivery' => 'required',
            'revision' => 'required',
            'price' => 'required',
        ]);

        if($request->slug != $job->slug) {
            $rules['slug'] = 'unique:jobs';
        }

        $user = Auth::user();

        // $validatedData = $request->validate($rules);
        Job::where('id', $job->id)->update([
            "user_id" => $user->id,
            "category_id" => $request['category_id'],
            "title" => $request['title'],
            "slug" => $request['slug'],
            "description" => $request['description'],
            "job_style" => $request['job_style'],
            "file_format" => $request['file_format'],
            "package_name" => $request['package_name'],
            "package_description" => $request['package_description'],
            "job_delivery" => $request['job_delivery'],
            "revision" => $request['revision'],
            "price" => $request['price'],
        ]);

        return redirect("/profile/$user->username")->with('success', 'Job has been updated!');
    }

    public function destroy(Job $job)
    {
        if($job->job_image->count()) {
            // $images = JobImage::where('job_id', $job->id)->get();
            // return $images;
            foreach($job->job_image as $img) {
                $img_path = $img->image;
                // $job_id = $img->job_id;
                Storage::delete($img_path);
                JobImage::destroy($img->id);
            }
        }

        Job::destroy($job->id);

        return redirect()->back()->with('success', 'Job has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Job::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
