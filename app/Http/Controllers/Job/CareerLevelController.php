<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\CareerLevels;
use Illuminate\Http\Request;

class CareerLevelController extends Controller
{
    //

    public function CareersLevelView(){
        $data['careers']= CareerLevels::all();
        return view('backend.setup.career_level.career_level_view', $data);
    }


    public function CareersLevelAdd(){

        return view('backend.setup.career_level.career_level_add');
    }

    public function CareersLevelStore(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|unique:career_levels|min:4',

        ],
        [
            'name.required' => 'Please Input a name',
        ]);

        $data=new CareerLevels();
        $data->name=$request->name;
        $data->status=$request->status;

        $data->save();
        $notification = array(
            'message' => 'Career level added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('career.level.view')->with($notification);




    }
}
