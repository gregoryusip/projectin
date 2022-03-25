<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Monarobase\CountryList\CountryListFacade;

class RegisterController extends Controller
{
    //
    public function index()
    {
        $countries = CountryListFacade::getList('id');

        // return $countries[];
        return view('register', [
            "countries" => $countries,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required',
            'university' => 'required',
            'region_id' => 'required',
            'password' => 'required|min:5'
        ]);

        $temp_name = explode(" ", $validated['name']);
        $first_name = array_shift($temp_name);
        $last_name = implode(" ", $temp_name);

        $countries = CountryListFacade::getList('id');
        $region_id = strtolower($validated['region_id']);

        // $phone_number = '62' . $validated['phone_number'];

        $validated['password'] = Hash::make($validated['password']);

        // User::create($validated);
        User::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'full_name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'university' => $validated['university'],
            'region' => $countries[$validated['region_id']],
            'region_id' => $region_id,
            'password' => $validated['password'],
        ]);

        // $request->session()->flash('success', 'Successfull registration, please login!');

        return redirect('/login')->with('success', 'Successfull registration, please login!');
    }
}
