<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        return view('admin.carousel.index',
        [
            'carousels'=>Carousel::all()
        ]);
    }
    public function create()
    {
        return view('admin.carousel.add',
        [
            'blogs' =>Blog::where('status',1)->get()
        ]);
    }
    public function store(Request $request)
    {

        Carousel::saveInfo($request->blogs);
        return redirect(route('carousel'));
    }
    public function edit($id)
    {
        return view('admin.carousel.edit',
        [
            'carousel'=>Carousel::find($id),
            'blogs' =>Blog::where('status',1)->get()
        ]);
    }
    public function update(Request $request,$id)
    {
        Carousel::UpdateCarousel($request , $id);

        return redirect(route('carousel'));
    }

    public function status($id)
    {
        Carousel::checkStatus($id);
        return redirect(route('carousel'));
    }
}
