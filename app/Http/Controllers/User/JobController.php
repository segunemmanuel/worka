<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function JobsView(){
        return view('backend.setup.job.job_view');
    }


    public function JobsAdd(){
        return view('backend.setup.job.job_add');
    }
}
