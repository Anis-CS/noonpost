<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function author(){
        return view('website.pages.author');
    }
    public function about(){
        return view('website.pages.about');
    }
    public function contact(){
        return view('website.pages.contact');
    }
    public function login(){
        return view('website.pages.login');
    }
    public function signUp(){
        return view('website.pages.sign-up');
    }
    public function pages404(){
        return view('website.pages.page404');
    }

}
