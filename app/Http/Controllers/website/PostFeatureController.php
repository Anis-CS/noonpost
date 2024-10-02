<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostFeatureController extends Controller
{
    public function postDefault(){
        return view('website.post-features.post-default');
    }
    public function leftSidebar(){
        return view('website.post-features.post-left-sidebar');
    }
    public function noSidebar(){
        return view('website.post-features.post-no-sidebar');
    }
    public function postVideo(){
        return view('website.post-features.post-video');
    }
    public function postAudio(){
        return view('website.post-features.post-audio');
    }
    public function postGallery(){
        return view('website.post-features.post-gallery');
    }
}
