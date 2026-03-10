<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{ 

  public function __construct()
    {
        $this->middleware('auth');
    }

    public function createBlog()
    {
        return View('admin.blog.create');
    }

    public function storeBlog(Request $request)
    {
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->author_name = $request->author_name;
        $blog->blog_details = $request->blog_details;
       
        if(isset($request->image)){

         $image = $request->file('image');
         $imageName = rand().'.'.$image->getClientOriginalExtension();
        //  $blog->image = $imageName;
         $image->move('blogs',  $imageName);

         $blog->image = url('blogs/'.$imageName);

        }

        $blog->save();

        toastr()->success('Blog created successfully');
        return redirect()->back();
    }
}
