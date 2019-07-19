<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function profile(){
    	return redirect('/home');
    }

    public function addProfile(Request $request){
    	$this-> validate($request, [
    		'name' => 'required',
    		'designation' => 'required',
    		'profile_pic' => 'required' 

    	]);
    	$profiles = new Profile;
    	$profiles->name = $request->input('name');
    	$profiles->user_id = Auth::user()->id;
    	$profiles->designation = $request->input('designation');
    	if (Input::hasFile('profile_pic')) {
    		$file = Input::File('profile_pic');
    		$file->move(public_path() . '/uploads/', $file->getClientOriginalName());
    		$url = URL::to("/") . '/uploads/' . $file->getClientOriginalName();
    		// return $url;
    		// exit();
    	}
    	$profiles->profile_pic = $url;
    	$profiles->save();
    	return redirect('/home')-> with('response', 'Profile Added Successfully');
    	
    	// return Auth::user();
    	// exit();
    }

}
