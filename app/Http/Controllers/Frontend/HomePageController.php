<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('frontende.index');
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

    public function blogDetails()
    {
        return view('frontende.blog-details');
    }
}
