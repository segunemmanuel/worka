<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\JobCategory;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //


    public function HomeView(){
        $data['categories']=JobCategory::all();

        $data['featured_jobs']=Jobs::where('is_featured',1)->get();
        return view('frontpage.home',$data);
    }


    public function AboutView(){
        return view('frontpage.about');
    }


    public function JobView(){

        $data['jobs']=Jobs::all();
        return view('frontpage.find_jobs',$data);
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
