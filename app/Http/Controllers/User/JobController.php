<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Jobs;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function JobsView(){
        $data['jobs']=Jobs::all();

        return view('backend.setup.job.job_view',$data);
    }


    public function JobsAdd(){

        $data['companies']=Company::all();
        return view('backend.setup.job.job_add',$data);
    }



    public function JobStore(Request $request){

 $data= new Jobs();
    $data->title=$request->title;
    $data->company_id=$request->company_id;
    $data->description=$request->description;
    $data->location=$request->location;
    $data->requirements=$request->requirements;
    $data->responbilities=$request->responbilities;
    $data->salary=$request->salary;
    $data->gender=$request->gender;
    $data->type=$request->type;
    $data->degree=$request->degree;
    $data->save();

    $notification = array(
        'message' => 'Job added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('jobs.view')->with($notification);








    }
}


