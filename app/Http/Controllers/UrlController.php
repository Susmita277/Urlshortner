<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\Visitor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UrlController extends Controller
{
    public function dashboard()
    {
        return view('Backend.dashboard');
    }
    public function index()
    {
        //get url create by currently authenticated user
        $urls = auth()->user()->url;
        return view('Backend.Links.index', compact('urls'));
    }

    public function create()
    {
        return view('Backend.Links.create');
    }
    public function storeBackend(Request $request)
    {
        $request->validate([
            'backend_url' => 'required|url|max:2048',
            'title' => 'nullable|string',
        ]);
        $originalUrl = $request->input('backend_url');
        $shortCode = Str::random(8);
        $urlParts = parse_url($originalUrl);
        $title = isset($urlParts['host']) ? $urlParts['host'] : 'Untitled';

        $url = new Url();
        $url->original_url = $originalUrl;
        $url->short_url = $shortCode;
        $url->title = $title;
        if (Auth::check()) {
            $url->user()->associate(Auth::user());
        }
        $url->save();
        return redirect(route('admin.url.index'))->with('success','Created Successfully ');
    }

    public function edit($id)
    {
        //its check the currently authenticate user id and request id ,if match its provide accessablity for edit ,otherwise generate error message
        // $user_id=auth()->id();
        // $query= Url::where('user_id',$user_id)
        // ->where('id',$id)->first();
        // if(!$query){
        //  abort(401);
        // }
        $url = Url::findOrFail($id);
        if ($url->user_id != auth()->id()) {
            abort(401);
        }
        return view('Backend.Links.edit', compact('url'));
    }
    public function update(Request $request, $id)
    {
        $url = Url::findOrFail($id);
        if ($url->user_id != auth()->id()) {
            abort(401);
        }
        $request->validate([
            'backend_url' => 'required|url|max:2048',
            'title' => 'nullable|string',
        ]);

        $originalUrl = $request->input('backend_url');
        $shortCode = Str::random(8);
        $urlParts = parse_url($originalUrl);
        $title = $request->filled('title') ? $request->input('title') : (isset($urlParts['host']) ? $urlParts['host'] : 'Untitled');

        //Update the url
        $url->original_url = $originalUrl;
        $url->short_url = $shortCode;
        $url->title = $title;
        $url->save();
        return redirect()->route('admin.url.index')->with('success','Updated Successfully');
    }

    public function view($id)
    {
        $url = Url::findOrFail($id);
        if ($url->user_id != auth()->id()) {
            abort(401);
        }
        return view('Backend.Links.view', compact('url'));
    }

    public function redirect(Request $request, $short_url)
    {

        $url = Url::where('short_url', $short_url)->first();
        if ($url) {
            //record ip and useragent
            Visitor::create([
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
            $url->increment('visitor_count');
            return redirect()->away($url->original_url);
        }
    }

    public function destroy($id)
    {
        $url = Url::findOrFail($id);
        if ($url->user_id != auth()->id()) {
            abort(401);
        }
        $url->delete();
        return redirect(route('admin.url.index'));
    }
}
