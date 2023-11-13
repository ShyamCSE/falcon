<?php

namespace App\Http\Controllers\Guest;

use App\Models\Post;
use App\Mail\ContactUs;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::get();

        // $bannerPosts = Post::query()->inRandomOrder()->take(10)->get();
        $posts = Post::latest()->paginate(5);
        $recentPosts = Post::query()->latest()->take(5)->get();

        return view('guest.home', compact('categories', 'posts', 'recentPosts'));
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
    Public function contactSave(Request $request){
        $data = $request->all();
        Mail::to('shyamyadav.cse@gmail.com')->send(new ContactUs($data));
       return redirect()->back();
    }
}
