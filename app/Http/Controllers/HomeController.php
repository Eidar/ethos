<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Upload;
use App\User;
use App\Profile;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $t = new Profile();
        $profile = Profile::where('user_id', $id)->get();
        $prep = array($profile[0]['attributes']);
       
        $avatar = $prep[0]['avatar'];
        $lstname = $prep[0]['lstname'];
        $dob = $prep[0]['dob'];
        $country = $prep[0]['country'];
        $place = $prep[0]['place'];
        $score = $prep[0]['score'];
        $about = $prep[0]['about'];
        
        return view('home', compact('avatar', 'lstname', 'dob', 'country', 'place', 'score', 'about'));
    }

    public function posts(){

        $uploads = Upload::all();


        return view('welcome', compact('uploads'));
       

    }
}


