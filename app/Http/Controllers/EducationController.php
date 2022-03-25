<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    //
    public function store(Request $request)
    {
        // return Auth::user()->id;
        $request->validate([
            'name' => 'required|max:255',
            'region' => 'required',
            'title' => 'required',
            'major' => 'required',
            'year' => 'required',
        ]);

        // $validatedData = $request->validate($rules);
        Education::create([
            'user_id' => Auth::user()->id,
            'name' => $request['name'],
            'region' => $request['region'],
            'title' => $request['title'],
            'major' => $request['major'],
            'year' => $request['year'],
        ]);

        return redirect()->back()->with('success', 'Education has been added!');
    }

    public function update(Request $request, Education $education)
    {
        // return $user->id;
        $request->validate([
            'name' => 'required|max:255',
            'region' => 'required',
            'title' => 'required',
            'major' => 'required',
            'year' => 'required',
        ]);

        // $validatedData = $request->validate($rules);
        Education::where('id', $education->id)->update([
            'name' => $request['name'],
            'region' => $request['region'],
            'title' => $request['title'],
            'major' => $request['major'],
            'year' => $request['year'],
        ]);

        return redirect()->back()->with('success', 'Education has been updated!');
    }

    public function destroy(Education $education)
    {
        Education::destroy($education->id);

        return redirect()->back()->with('success', 'Education has been deleted!');
    }
}
