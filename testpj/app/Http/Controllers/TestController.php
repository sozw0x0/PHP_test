<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $post = new Test();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->save();
        return view('complete');
    }
}