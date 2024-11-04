<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //add this line
use Illuminate\Support\Facades\Auth; //add this line
use Illuminate\Support\Facades\Storage; //add this line
use App\Models\UserBio;


class UserController extends Controller
{
    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->file('profile_photo')) {
            // Delete old photo if exists
            if ($user->profile_photo) {
                Storage::disk('public')->delete($user->profile_photo);
            }

            $fileName = time() . '_' . $request->file('profile_photo')->getClientOriginalName();
            $filePath = $request->file('profile_photo')->storeAs('uploads/profile_photos', $fileName, 'public');

            $user->profile_photo = $filePath;
            $user->save();
        }

        return redirect()->route('profile.edit')->with('status', 'profile-photo-updated');

    }
    public function showBio()
    {
        $user = Auth::user(); // Retrieve the currently authenticated user
        $bio = $user->bio; // Access the related bio for the user
        return view('profile.show-bio', compact('user', 'bio'));
    }
    public function updateBio(Request $request)
    {
        $user = Auth::user();
        $bio = $user->bio;

        $request->validate([
            'bio' => 'required|string',
            'phone' => 'required|digits:10', // Ensure the phone number is exactly 10 digits
        ]);

        if ($bio) {
            $bio->update([
                'bio' => $request->input('bio'),
                'phone' => $request->input('phone'),
            ]);
        } else {
            $user->bio()->create([
                'bio' => $request->input('bio'),
                'phone' => $request->input('phone'),
            ]);
        }

        return redirect()->route('profile.show-bio')
            ->with('status', 'Bio updated successfully!');
    }


}