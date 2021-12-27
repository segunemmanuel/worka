<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //

    public function CompanyView(){

        $data['companies']=Company::latest()->paginate(2);
    return view ('backend.setup.companies.companies_view',$data);


    }

    public function CompanyAdd(){
        return view('backend.setup.companies.company_add');
    }

public function CompanyStore(Request $request){

	$validatedData = $request->validate([
        'name' => 'required|unique:companies,name',
        'email'=>  'required|unique:companies,email|max:255',
        'industry'=> 'required|unique:companies,industry|max:255',
        'location'=>  'required|unique:companies,location|max:255',
        'year'=> 'required|unique:companies,date_established|max:255',
        'url'=> 'required|unique:companies,url|max:255',
        'description'=> 'required|unique:companies,description',
    ]);

    // Instantiate the model first
$data= new Company();
    $data->name=$request->name;
    $data->email=$request->email;
    $data->industry=$request->industry;
    $data->location=$request->location;
    $data->date_established=$request->year;
    $data->url=$request->url;
    $data->description=$request->description;
$logo =  $request->file('logo');


    // For logo
$name_gen=hexdec(uniqid());
$img_ext = strtolower($logo->getClientOriginalExtension());

$img_name = $name_gen.'.'.$img_ext;
$up_location = 'file/cv/';
$last_img = $up_location.$img_name;
$logo->move($up_location,$img_name);
//Save

Company::insert([
    'logo'=>$last_img,
]);

$data->save();


$notification = array(
    'message' => 'Company added Successfully',
    'alert-type' => 'success'
);

return redirect()->route('company.add')->with($notification);
}


public function CompanyEdit($id){
    $company=Company::find($id);
    return view ('backend.setup.companies.company_edit',compact('company'));
}


public function CompanyDelete($id){
Company::find($id)->delete();
        $notification = array(
            'message' => 'Company Deleted Successfully!',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);

}
}
