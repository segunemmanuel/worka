<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{



    public function UserView(){
        $user['user_model']=User::all();
        return view('backend.setup.user.user_view', $user);
    }


public function UserEdit($id){
    $editData=User::find($id);
    return view ('backend.setup.user.user_edit', compact('editData'));

}

}
