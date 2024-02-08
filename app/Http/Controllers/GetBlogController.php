<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\API\BlogPost;


class GetBlogController extends Controller
{
    
    public function list(Request $request)
    {
       
        $blogs = BlogPost::get();

        return view('blog_list', compact('blogs'));    
    }

    public function about($id)
    {
        $about = BlogPost::where('id', $id)->first();


        return view('about_blog', compact('about'));  
      }
}
