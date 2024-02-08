<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\API\BlogPost;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class BlogPostController extends BaseController
{
    public function create(Request $request)
    {
   

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content' => 'required',
            'author' => 'required|string'
        ]);
        
       
        if ($validator->fails()) {
            return $this->sendError(['error' => $validator->errors()], 400);
        }
        
        $blog_post = new BlogPost;
        $blog_post->title = $request->input('title');
        $blog_post->content = $request->input('content');
        $blog_post->author = $request->input('author');
        $blog_post->publication_date = now(); 
        
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('blog_images'), $imageName);
                $blog_post->image = $imageName;
            }

            if ($blog_post->save()) {
        
                return $this->sendResponse(['blog_post' => $blog_post, 'message' => 'Blog created successfully'], 200);
            } else {
                return $this->sendError(['message' => 'Failed to create blog'], 500);
            
        }

}


public function about($id){

    $detail=BlogPost::where('id',$id)->get();
    
    if($detail){
        return $this->sendResponse([ 'detail' =>  $detail ], 200);
    }
    return $this->sendError('No detail found', 400);
    }
    


    public function list(){

        $list=BlogPost::get();
        
        if($list){
            return $this->sendResponse([ 'list' =>  $list ], 200);
        }
        return $this->sendError('No list found', 400);
        }
        

public function update(Request $request,$id)
{


    $validator = Validator::make($request->all(), [
        'title' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required',
        'author' => 'required|string'
    ]);
    
   
    if ($validator->fails()) {
        return $this->sendError(['error' => $validator->errors()], 400);
    }
    
    $blog_post= BlogPost::find($id);



    if ($blog_post) {
        return $this->sendError(['message' => 'The data is not exsit'], 400);
    }
    $blog_post->title = $request->input('title');
    $blog_post->content = $request->input('content');
    $blog_post->author = $request->input('author');
    $blog_post->publication_date = now(); 
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_images'), $imageName);
            $blog_post->image = $imageName;
        }

        if ($blog_post->save()) {
    
            return $this->sendResponse(['blog_post' => $blog_post, 'message' => 'Blog update successfully'], 200);
        } else {
            return $this->sendError(['message' => 'Failed to update blog'], 500);
        
    }

}

}