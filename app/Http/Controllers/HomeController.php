<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        // if(Auth::user())
        // {
        //     // $full_name = Auth::user();
        //     // $temp_name = explode(" ", $full_name->name);
        //     // $first_name = $temp_name[0];
        //     $first_name = Auth::user()->first_name;
        // }
        // else
        // {
        //     $first_name = 'Kawan';
        // }
        // $first_name = !empty(Auth::user() ? Auth::user()->first_name : 'Kawan');

        return view('home.home', [
            "categories" => Category::all(),
        ]);
    }
}
