<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\UserCategory;
use Carbon\Carbon;


class ProfileController extends Controller
{

    public function ProfileView(){

        $id = Auth::user()->id;
    	$user = User::find($id);

    return view ('backend.setup.profile.view_profile',compact('user'));

    }



    public function ProfileEdit(){
        //Get current user id
        $id = Auth::user()->id;
     	$data['editData'] = User::find($id);
        $data['categories']=UserCategory::all();

    return view ('backend.setup.profile.edit_profile',$data);

    }

    public function ProfileUpdate(Request $request, $id){


$data=User::find($id);
$data->name = $request->name;
$data->email = $request->email;
$data->address = $request->address;
$data->religion = $request->religion;
$data->dob = $request->dob;
$data->mobile = $request->mobile;
$data->gender = $request->gender;
$data->user_category_id = $request->user_category;
$cv =  $request->file('cv');
$user_image =  $request->file('image');


// Uploading files
$name_gen=hexdec(uniqid());
        $img_ext = strtolower($cv->getClientOriginalExtension());

$img_name = $name_gen.'.'.$img_ext;
$up_location = 'file/cv/';
$last_img = $up_location.$img_name;
 $cv->move($up_location,$img_name);

// Uploading images
$name_generate=hexdec(uniqid());
        $img_extension = strtolower($user_image->getClientOriginalExtension());

$image_name = $name_generate.'.'.$img_extension;
$upload_location = 'image/';
$last_image = $upload_location.$image_name;
 $user_image->move($upload_location,$image_name);


 User::insert([
     'cv'=>$last_img,
     'image'=>$last_image
 ]);


// end of uploading files


$data->save();

$notification = array(
    'message' => 'User Profile Updated Successfully',
    'alert-type' => 'success'
);

return redirect()->route('view.profile')->with($notification);




    }






} // End Method
