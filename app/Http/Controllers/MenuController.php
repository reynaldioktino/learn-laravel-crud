<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $blogs = Blog::all();

        return view('blog/home', ['blogs' => $blogs]);
    }
}
