<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Models\FunctionAreas;
use Illuminate\Http\Request;
class FunctionController extends Controller
{
    //


    public function FunctionLevel(){


$data['allData']=FunctionAreas::all();
        return view('backend.setup.functional_areas.functions_view',  $data);


    }
}
