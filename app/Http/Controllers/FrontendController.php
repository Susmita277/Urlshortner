<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Url;


class FrontendController extends Controller
{
    public function create()
    {
        return view('Frontend.url_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url|max:2048',

        ]);
        $originalUrl = $request->original_url;
        $shortCode = Str::random(8);
        $urlParts = parse_url($originalUrl);
        $title = isset($urlParts['host']) ? $urlParts['host'] : 'Untitled';

        $shortUrl = new Url();
        $shortUrl->original_url = $originalUrl;
        $shortUrl->short_url = $shortCode;
        $shortUrl->title = $title;
        if (Auth::check()) {
            $shortUrl->user()->associate(Auth::user());
        }
        $shortUrl->save();
        return redirect()->route('admin.url.index');
    }

}
