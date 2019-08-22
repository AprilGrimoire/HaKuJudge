<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index()
    {
        return view('static_pages.index');
    }

    public function booklist()
    {
        return view('static_pages.booklist');
    }

    public function about()
    {
        return view('static_pages.about');
    }

    public function test()
    {
        return view('static_pages.test');
    }

    public function services()
    {
        return view('static_pages.services');
    }
}
