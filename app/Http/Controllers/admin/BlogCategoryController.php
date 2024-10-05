<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog-category.index',
            [
                'categories'    =>  BlogCategory::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BlogCategory::saveInfo($request);
        return redirect(route('categories'))->with('message', 'Category info create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        BlogCategory::checkStatus($id);
        return redirect('/categories')->with('message', 'Category Status Updated.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog-category.edit',
        [
            'category'  =>  BlogCategory::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        BlogCategory::saveInfo($request,$id);
        return redirect(route('categories'))->with('message','Blog Category update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::deleteCategory($id);
        return redirect('/categories')->with('message', 'Category Info Deleted Successfully');
    }
}
