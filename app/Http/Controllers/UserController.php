<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Certification;
use App\Models\Education;
use App\Models\Job;
use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function show(User $user)
    {
        $link_whatsapp = '62' . substr($user->phone_number, 1);
        $jobs = Job::where('user_id', $user->id)->get();

        return view('profile.index', [
            "user" => $user,
            "jobs" => $jobs,
            "categories" => Category::all(),
            "languages" => Language::where('user_id', $user->id)->get(),
            "educations" => Education::where('user_id', $user->id)->get(),
            "certifications" => Certification::all(),
            "link_whatsapp" => $link_whatsapp,
        ]);
    }
}
