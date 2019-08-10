<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    
    public function contact(){
        return view('pages.contact');
    }

    public function features(){
        return view('pages.features');
    }

    public function news(){
        return view('pages.news');
    }

    public function serviceList(){
        return view('pages.serviceList');
    }

    public function styleGuide(){
        return view('pages.styleGuide');
    }

    public function blogDefault(){
        return view('pages.blogDefault');
    }

    public function blogSingle(){
        return view('pages.blogSingle');
    }
    public function testimonial(){
        return view('pages.testimonial');
    }
}
