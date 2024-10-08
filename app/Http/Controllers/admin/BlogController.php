<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index',
        [
            'blogs' =>Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add',
        [
            'categories'    =>  BlogCategory::all(),
            'authors'       =>  Author::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::saveInfo($request);
        return redirect(route('blogs.index'))->with('message', 'Blog info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.blog.details',
        [
            'blog' =>   Blog::find($id),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit',
            [
                'blog'  =>  Blog::find($id),
                'categories'    => BlogCategory::all(),
                'authors'   =>  Author::all()
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::saveInfo($request,$id);
        return redirect(route('blogs.index'))->with('message','Blog update successfully.');
    }
    public function status(string $id)
    {
        Blog::checkStatus($id);
        return back()->with('message','Status Change Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::deleteBlog($id);
        return redirect('blogs.index')->with('message', 'Blog Info Deleted Successfully');
    }

}
