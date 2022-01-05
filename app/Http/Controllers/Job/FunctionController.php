<?php
namespace App\Http\Controllers\Job;
use App\Http\Controllers\Controller;
use App\Models\FunctionAreas;
use Illuminate\Http\Request;


class FunctionController extends Controller
{
    //


    public function FunctionLevel(){
$data['functions']=FunctionAreas::all();
return view('backend.setup.functional_areas.functions_view',  $data);
    }


public function FunctionAdd(){
return view('backend.setup.functional_areas.functions_add');
}





public function functionStore(Request $request){
    $validatedData = $request->validate([
        'name' => 'required|unique:career_levels|min:4',

    ],
    [
        'name.required' => 'Please Input a name',
    ]);

    $data=new FunctionAreas();
    $data->name=$request->name;
    $data->status=$request->status;

    $data->save();
    $notification = array(
        'message' => 'Functional areas added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('functional.view')->with($notification);

}

}
