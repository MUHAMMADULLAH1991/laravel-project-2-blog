<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{ 

   public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $blogCount = Blog::count();
        $messageCount = ContactMessage::count();
        return view('admin.dashboard', compact('blogCount', 'messageCount'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function showSettings()
    {
        $settings = Setting::first();
        // dd($settings);
        return view('admin.settings.edit', compact('settings'));
    }

    public function updateSettings(Request $request)
    {
        $settings = Setting::first();

        $settings->about_me = $request->about_me;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->github = $request->github;

        $settings->save();

        toastr()->success('Settings update successfully');
        return redirect()->back();
    }

    public function showMessages()
    {
        $messages = ContactMessage::orderby('id', 'desc')->paginate(20);
        // dd($messages);
        return view('admin.settings.messages', compact('messages'));
    }

    public function deleteMessages($id)
    { 
        $message = ContactMessage::find($id);

        $message->delete();
          toastr()->success('Message deleted successfully!');
        return redirect()->back();
    }
}
