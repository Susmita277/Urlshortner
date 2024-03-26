<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateProfile extends Controller
{

    public function profile()
    {
        return view('Frontend.update_profile');
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',

        ]);
        $userdata = auth()->user();
        $userdata->name = $request->name;
        $userdata->email = $request->email;
        $userdata->save();
        return redirect(route('admin.url.index'))->with('success', 'Profile Updated Successfully');
    }
}
