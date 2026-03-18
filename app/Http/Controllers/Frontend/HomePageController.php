<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        // dd($blogs);
        return view('frontende.index', compact('blogs'));
    }

    public function aboutme()
    {
        return view('frontende.about-me');
    }

    public function contactMe()
    {
        return view('frontende.contact-me');
    }

    public function storeContactMessage(Request $request)
    {
        $message = new ContactMessage();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;

        $message->save();

        toastr()->success('Message is sent successfully');
        return redirect()->back();
    }

    public function blogDetails($id)
    {
        $blog = Blog::find($id);
        // dd($blog);
        return view('frontende.blog-details', compact('blog'));
    }
}
