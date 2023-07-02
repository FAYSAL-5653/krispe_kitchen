<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function menu(){
        return view('frontend.menu');
    }
    public function news_detail(){
        return view('frontend.news-detail');
    }
    public function news(){
        return view('frontend.news');
    }


}
