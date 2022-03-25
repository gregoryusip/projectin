<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    //
    public function index()
    {
        return view('freelancer.freelancers', [
            "users" => User::where('is_freelancer', true)->get(),
            "categories" => Category::all(),
        ]);
    }
}
