<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function create()
    {
        return view('admin.form');
    }
    
    public function post(Request $request)
    {
        $post = [
            'title' => $request->title,
            'content' => $request->content,
            'photo' => $request->photo,
            'cate' => $request->cate,
            'repo' => $request->repo,
            ];
            
        return view('admin.post', ['post' => $post]);
    }
}
