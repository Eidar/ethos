<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Auth;
use Image;
use App\Profile;

class SetProfile extends Controller
{
	public function show(){
		return view('setprofile');
	}
    //
    public function update(Request $request){

    	$user = Auth::user()->id;
    	$profile = new Profile;

    	$profile->user_id = $user;
        $profile->name = Input::get('name');
        $profile->lstname = Input::get('lstname');
        $profile->dob =  Input::get('datepicker');
        $profile->country = Input::get('country');
        $profile->place = Input::get('place');
        $profile->about = Input::get('about');
        
        //image upload kod
        $file = request()->file('avatar');
        $ext = $file->extension();
        $filename = time() . '.' . $ext;
        Image::make($file)->resize(500, 180)->save( public_path('/img/avatars/' . $filename) );
        $profile->avatar = $filename;
        $profile->save();
       
        return redirect()->route('/home')->with('message', 'You have successfully updated your information!');

        }
}
