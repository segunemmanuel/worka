<?php

namespace App\Http\Controllers\Home;

use App\Models\JobsApplied;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ApplicationController extends Controller
{
    //

    public function ApplicationView(){
        $no_id=Auth()->user()->id;
$data['applied_jobs']=JobsApplied::where('user_id','$no_id');

        return view('backend.setup.applications.application_view', $data);

    }
}
