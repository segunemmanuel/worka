<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserCategory;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{

    public function UserCatView(){
        $data['allData']=UserCategory::all();
        return view ('backend.setup.user.user_category_view',$data);
    }
    public function UserCatAdd(){
        return view ('backend.setup.user.user_category_add');
    }


    public function UserCatStore(Request $request){
// Validation
$validatedData = $request->validate([
    'name' => 'required|unique:user_categories,name',
]);
$user=new UserCategory();
$user->name=$request->name;
$user->save();

$notification = array(
    'message' => 'User category Inserted Successfully',
    'alert-type' => 'success'
);

return redirect()->route('user.category.view')->with($notification);

    }


public function UserCatEdit($id){

    $editData=UserCategory::find($id);
    return view ('backend.setup.user.user_category_edit',compact('editData'));

}




public function UserCatUpdate(Request $request,$id){
    // Validation
    $validatedData = $request->validate([
        'name' => 'required|unique:user_categories,name',
    ]);
    $user=UserCategory::find($id);
    $user->name=$request->name;
    $user->save();
    
    $notification = array(
        'message' => 'User category updated successfully',
        'alert-type' => 'success'
    );
    
    return redirect()->route('user.category.view')->with($notification);
    
        }



        
public function UserCatDelete($id){
    
    $user=UserCategory::find($id);
 
    $user->delete();
    
    $notification = array(
        'message' => 'User category deleted successfully',
        'alert-type' => 'warning'
    );
    
    return redirect()->route('user.category.view')->with($notification);
    
        }
}
