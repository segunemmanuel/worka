<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function BlogView(){
        return view('frontpage.blog');
    }


    public function ContactView(){
        return view('frontpage.contact');
    }

    public function Logout(){
    	Auth::logout();
    	return Redirect()->route('login');

    }

    public function SingleJobView($id, $company_id){

        $data['jobs']=Jobs::find($id);
        // $date=Jobs::find($id)->created_at;
        // $date=$data->created_at;
        $data['company']=Company::find($company_id);
    	// return dd($data);
    return view('frontpage.single_job',$data);


    }
}
