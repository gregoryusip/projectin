<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('category.categories', [
            // "users" => User::where('is_freelancer', true)->get(),
            "categories" => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        // return $category;
        $jobs = Job::where('category_id', $category->id)->get();

        return view('category.category', [
            // "users" => User::where('is_freelancer', true)->get(),
            "categories" => Category::all(),
            "category" => $category,
            "jobs" => $jobs,
        ]);
    }
}
