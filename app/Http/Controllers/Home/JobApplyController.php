<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\JobsApplied;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Carbon;


class JobApplyController extends Controller
{
    //


    public function Apply(Request $request,$id){
$data= new JobsApplied();
$data->user_id=Auth()->user()->id;
$data->job_id=$id;
$data->created_at=Carbon::now();
$data->save();


        return Redirect()-> route('home.view');
    }

}

