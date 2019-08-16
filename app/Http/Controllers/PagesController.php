<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class PagesController extends Controller
{
    public function index(){
        $services = Service::All();
        return view('pages.index')->with('services',$services);
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

    public function about(){
        return view('pages.about');
    }
    public function gallery(){
        return view('pages.gallery');
    }

    public function serviceList(){
        return view('pages.serviceList');
    }
    public function serviceDetail(){
        return view('pages.serviceDetail');
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

    public function demo(){
        return $demo = Service::All();
        //return view('pages.demo')->with('demo',$demo);
    }
}
