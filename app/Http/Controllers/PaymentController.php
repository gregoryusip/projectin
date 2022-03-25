<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function index(Job $job)
    {
        return view('payment.index', [
            "categories" => Category::all(),
            "job" => $job,
        ]);
    }

    public function success(Job $job)
    {
        return view('payment.success', [
            "categories" => Category::all(),
            "job" => $job,
        ]);
    }
}
