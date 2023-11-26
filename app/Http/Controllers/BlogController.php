<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $data['meta_title']= 'Blog';
        $data['className']= 'blog';
        return view('blog',$data);
    }
    
    public function blog_post(){
        $data['meta_title']= 'Blog-Post';
        $data['className']= 'blog-post';
        return view('blog-post',$data);
    }

}
