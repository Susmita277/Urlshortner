<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Joke;

class HttpController extends Controller
{
    public function index()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');
        $response = json_decode($response->body());
         $joke= new Joke();
         $joke->type = $response->type;
         $joke->joke = $response->setup .' '. $response->punchline;
         $joke->save();
         return $joke;

    }

    public function post_request(){
        $request= Http::post('https://httpbin.org/post',[
         'id'=>'1',
        'class'=>'laravel'
        ]);
        return $request;
    }
}
