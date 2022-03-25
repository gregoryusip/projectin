<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificationController extends Controller
{
    //
    public function store(Request $request)
    {
        // return Auth::user()->id;
        $request->validate([
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'year' => 'required',
        ]);

        // $validatedData = $request->validate($rules);
        Certification::create([
            'user_id' => Auth::user()->id,
            'title' => $request['title'],
            'name' => $request['name'],
            'year' => $request['year'],
        ]);

        return redirect()->back()->with('success', 'Certification has been added!');
    }

    public function update(Request $request, Certification $certification)
    {
        // return $user->id;
        $request->validate([
            'title' => 'required|max:255',
            'name' => 'required|max:255',
            'year' => 'required',
        ]);

        // $validatedData = $request->validate($rules);
        Certification::where('id', $certification->id)->update([
            'title' => $request['title'],
            'name' => $request['name'],
            'year' => $request['year'],
        ]);

        return redirect()->back()->with('success', 'Certification has been updated!');
    }

    public function destroy(Certification $certification)
    {
        Certification::destroy($certification->id);

        return redirect()->back()->with('success', 'Certification has been deleted!');
    }
}
