<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;



class ProfileController extends Controller
{

    public function ProfileView(){

        $id = Auth::user()->id;
    	$user = User::find($id);

    return view ('backend.setup.profile.view_profile',compact('user'));

    }
}
