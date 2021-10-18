<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //


    public function HomeView(){
        return view('frontpage.home');
    }


    public function AboutView(){
        return view('frontpage.about');
    }


    public function JobView(){
        return view('frontpage.find_jobs');
    }
}
