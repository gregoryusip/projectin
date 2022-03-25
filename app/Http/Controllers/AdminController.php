<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function showVerifyFreelancer()
    {
        // return 'success';
        $this->authorize('is_admin');

        $users = User::where('is_freelancer', true)->where('is_verified', false)->get();

        return view('dashboard.verify.index', [
            "categories" => Category::all(),
            "users" => $users,
        ]);
    }

    public function verifyFreelancer(User $user)
    {
        // $validatedData = $request->validate($rules);
        User::where('username', $user->username)->update([
            'is_verified' => true,
        ]);

        return redirect()->back()->with('success', 'User has been verified!');
    }

    public function destroy(User $user)
    {
        if($user->photo_profile) {
                Storage::delete($user->photo_profile);
        }

        User::destroy($user->id);

        return redirect()->back()->with('success', 'User has been deleted!');
    }
}
