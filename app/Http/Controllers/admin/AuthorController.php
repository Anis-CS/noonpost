<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public static function index()
    {
            return view('admin.author.index');
    }
    public static function create()
    {
        return view('admin.author.add');
    }

}
