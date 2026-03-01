<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

    public function blogDetails()
    {
        return view('frontende.blog-details');
    }
}
