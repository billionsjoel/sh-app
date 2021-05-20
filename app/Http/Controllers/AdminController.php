<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function publishBlog(Request $request)
    {
        $blog = new Blog;
        $blog->title = request()->title;
        $blog->body = request()->body;
        $blog->author = request()->author;

        if (request()->category == 1) {
            $blog->category = "Editing";
        } elseif ((request()->category == 2)) {
            $blog->category = "Authoring";
        } elseif ((request()->category == 3)) {
            $blog->category = "Publishing";
        } elseif ((request()->category == 4)) {
            $blog->category = "others";
        } else {
            $blog->category = "uncategorized";
        }

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $blog->image = $name;

            $blog->save();
        }

//        $blog->save();
        return view('home');
    }
}
