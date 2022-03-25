<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Job;
use App\Models\JobImage;
use App\Models\Language;
use App\Models\LevelLanguage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Monarobase\CountryList\CountryListFacade;

class DashboardUserController extends Controller
{
    //
    public function show(User $user)
    {
        $link_whatsapp = '62' . substr($user->phone_number, 1);
        $jobs = Job::where('user_id', $user->id)->get();

        return view('dashboard.profile.index', [
            "user" => $user,
            "categories" => Category::all(),
            "jobs" => $jobs,
            // "job_images" => JobImage::where('job_id', $jobs->id)->get(),
            "languages" => Language::where('user_id', $user->id)->get(),
            "level_languages" => LevelLanguage::all(),
            "educations" => Education::all(),
            "certifications" => Certification::all(),
            "link_whatsapp" => $link_whatsapp,
        ]);
    }

    public function edit(User $user)
    {
        $countries = CountryListFacade::getList('id');

        // $full_name = $user->first_name . " " . $user->last_name;
        $region_id = strtoupper($user->region_id);

        return view('dashboard.profile.edit', [
            "user" => $user,
            "categories" => Category::all(),
            "full_name" => $user->full_name,
            "countries" => $countries,
            "region_id" => $region_id,
            "languages" => Language::where('user_id', $user->id)->get(),
            "level_languages" => LevelLanguage::all(),
            "educations" => Education::all(),
            "certifications" => Certification::all(),
        ]);
        // return $full_name;
    }

    public function update(Request $request, User $user)
    {
        // return $user->username;

        $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required',
            'university' => 'required',
            'photo_profile' => 'image|file',
            'region_id' => 'required',
        ]);

        // if($request->username != $user->username) {
        //     $rules['username'] = 'required|unique:users';
        // }

        // $validatedData = $request->validate($rules);

        $temp_name = explode(" ", $request->name);
        $first_name = array_shift($temp_name);
        $last_name = implode(" ", $temp_name);

        // return ($temp_name);

        $countries = CountryListFacade::getList('id');
        $region_id = strtolower($request['region_id']);

        $img_path = '';
        // return $request->oldImage;
        if($request->file('photo_profile')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $img_path = $request->file('photo_profile')->store('images');
            // return $img_path;
        }

        // User::where('username', $user->username)->update($validatedData);

        User::where('username', $user->username)->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'full_name' => $request['name'],
            'username' => $request['username'],
            'photo_profile' => $img_path,
            'email' => $request['email'],
            'phone_number' => $request['phone_number'],
            'university' => $request['university'],
            'region' => $countries[$request['region_id']],
            'region_id' => $region_id,
            'role' => $request['role'],
            'quote' => $request['quote'],
            'description' => $request['description'],
            'portfolio_link' => $request['portfolio_link'],
            'dribbble_link' => $request['dribbble_link'],
            'github_link' => $request['github_link'],
            'facebook_link' => $request['facebook_link'],
        ]);

        return redirect()->back()->with('success', 'Profile has been updated!');
    }
}
