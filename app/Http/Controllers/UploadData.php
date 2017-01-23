<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use Image;
use App\Profile;
use App\Upload;


class UploadData extends Controller
{
    //

    public function showtext(){
    	return view('uploadtext');
    }

     public function showvideo(){
    	return view('uploadvideo');
    }

     public function showmusic(){
    	return view('uploadmusic');
    }

     public function showgraphic(){
    	return view('uploadgraphic');
    }

    public function text(Request $request){


    	$id = Auth::user()->id;
    	$t = new Profile;

    	//PROFILE_ID
    	$prep = Profile::where('user_id', $id)->get();
    	$profile = $prep[0]['attributes'];
    	$profile_id = (int) $profile['id'];

    	$upload = new Upload();
    	

    	//AUTHOR
    	$author = $profile['name'] . ' ' . $profile['lstname'];

    	//TEXT
    	$text = (string) Input::get('textarea');

    	//TITLE
    	$title = (string) Input::get('title');

    	//DESCRIPTION
    	$description = (string) Input::get('description');

    	$upload->profile_id = $profile_id;
        $upload->title = $title;
        $upload->author = $author;
        $upload->description= $description; 
        $upload->type = 'text';
        $upload->source = $text;
        $upload->score = 0;
        $upload->save();

        
        return redirect()->route('/welcome')->with('message', 'You have successfully uploaded your work!');

        }

        /*
        *  VIDEO UPLOAD
        */

    public function video(Request $request){

		$id = Auth::user()->id;
    	$t = new Profile;

    	//PROFILE_ID
    	$prep = Profile::where('user_id', $id)->get();
    	$profile = $prep[0]['attributes'];
    	$profile_id = (int) $profile['id'];

    	$upload = new Upload();
    	

    	//AUTHOR
    	$author = $profile['name'] . ' ' . $profile['lstname'];

    	//VIDEO
    	$video = (string) Input::get('embed');

    	//TITLE
    	$title = (string) Input::get('title');

    	//DESCRIPTION
    	$description = (string) Input::get('textarea');

    	$upload->profile_id = $profile_id;
        $upload->title = $title;
        $upload->author = $author;
        $upload->description= $description; 
        $upload->type = 'video';
        $upload->source = $video;
        $upload->score = 0;
        $upload->save();
   
    	return redirect()->route('/home')->with('message', 'You have successfully updated your information!');

    }

    public function music(Request $request){

		$id = Auth::user()->id;
    	$t = new Profile;

    	//PROFILE_ID
    	$prep = Profile::where('user_id', $id)->get();
    	$profile = $prep[0]['attributes'];
    	$profile_id = (int) $profile['id'];

    	$upload = new Upload();
    	

    	//AUTHOR
    	$author = $profile['name'] . ' ' . $profile['lstname'];

    	//VIDEO
    	$music = (string) Input::get('embed');

    	//TITLE
    	$title = (string) Input::get('title');

    	//DESCRIPTION
    	$description = (string) Input::get('textarea');

    	$upload->profile_id = $profile_id;
        $upload->title = $title;
        $upload->author = $author;
        $upload->description= $description; 
        $upload->type = 'music';
        $upload->source = $music;
        $upload->score = 0;
        $upload->save();
   
    return redirect()->route('/home')->with('message', 'You have successfully updated your information!');

    }

    public function graphic(Request $request){

		$id = Auth::user()->id;
    	$t = new Profile;

    	//PROFILE_ID
    	$prep = Profile::where('user_id', $id)->get();
    	$profile = $prep[0]['attributes'];
    	$profile_id = (int) $profile['id'];

    	$upload = new Upload();
    	

    	//AUTHOR
    	$author = $profile['name'] . ' ' . $profile['lstname'];

    	//GRAPHIC
    	//image upload kod
        $file = request()->file('graphic');
        $ext = $file->extension();
        $filename = time() . '.' . $ext;
        Image::make($file)->save( public_path('/img/upload/' . $profile_id . '/' . $filename) );
        $graphic = '/img/upload/' . $profile_id . '/' . $filename;
        
        
       	//TITLE
    	$title = (string) Input::get('title');

    	//DESCRIPTION
    	$description = (string) Input::get('textarea');

    	$upload->profile_id = $profile_id;
        $upload->title = $title;
        $upload->author = $author;
        $upload->description= $description; 
        $upload->type = 'graphic';
        $upload->source = $graphic;
        $upload->score = 0;
        $upload->save();
   
   
    return redirect()->route('/home')->with('message', 'You have successfully updated your information!');

    }
}
