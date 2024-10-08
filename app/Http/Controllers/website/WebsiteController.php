<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('website.home.index',
        [
            'carousels' =>Carousel::where('status',1)->get()
        ]);
    }
}
