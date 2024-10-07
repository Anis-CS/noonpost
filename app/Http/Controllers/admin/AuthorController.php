<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
            return view('admin.author.index',['authors'=>Author::all()]);
    }
    public function create()
    {
        return view('admin.author.add');
    }
    public function store(Request $request)
    {

        Author::saveInfo($request);
        return redirect(route('author.index'))->with('message','Author Info save successfully.');
    }
    public function edit($id)
    {
        return view('admin.author.edit',
            [
                'author'    => Author::find($id)
            ]
        );
    }

    public function show(string $id)
    {
        return view('admin.author.details',
            [
                'author'=>Author::find($id)
            ]);
    }

    public function status($id)
    {

        Author::statusCheck($id);
        return redirect(route('author.index'))->with('message','Author Status save successfully.');
    }

    public function update(Request $request, $id)
    {
        Author::saveInfo($request, $id);
        return redirect(route('author.index'))->with('message','Author Info save successfully.');
    }

    public function destroy($id)
    {
        Author::authorDelete($id);
        return redirect(route('author.index'));

    }

}
