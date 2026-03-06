<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
