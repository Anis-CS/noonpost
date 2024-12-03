<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Author;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function author(){
        return view('website.pages.author');
    }

    public function authorInfo(string $id){
        return view('website.pages.author',
            [
                'author'    =>  Author::find($id),
            ]);
    }
    public function about(){
        return view('website.pages.about',[
            'abouts'    =>  About::find('1')
        ]);
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
