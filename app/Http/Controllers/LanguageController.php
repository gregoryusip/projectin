<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    //

    public function store(Request $request)
    {
        // return Auth::user()->id;
        $request->validate([
            'language' => 'required|max:255'
        ]);

        // $validatedData = $request->validate($rules);
        Language::create([
            'user_id' => Auth::user()->id,
            'name' => $request['language'],
            'level_id' => $request['level_id'],
        ]);

        return redirect()->back()->with('success', 'Language has been added!');
    }

    public function update(Request $request, Language $language)
    {
        // return $user->id;
        $request->validate([
            'language' => 'required|max:255'
        ]);

        // $validatedData = $request->validate($rules);
        Language::where('id', $language->id)->update([
            'name' => $request['language'],
            'level_id' => $request['level_id'],
        ]);

        return redirect()->back()->with('success', 'Language has been updated!');
    }

    public function destroy(Language $language)
    {
        Language::destroy($language->id);

        return redirect()->back()->with('success', 'Language has been deleted!');
    }
}
