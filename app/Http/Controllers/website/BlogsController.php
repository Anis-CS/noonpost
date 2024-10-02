<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogGrid(){
        return view('website.blogs.blog-grid');
    }
    public function blogMasonry(){
        return view('website.blogs.blog-masonry');
    }
    public function blogList(){
        return view('website.blogs.blog-list');
    }
    public function blogClassic(){
        return view('website.blogs.blog-classic');
    }
}
