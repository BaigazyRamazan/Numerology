<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Auth;
use Illuminate\Support\Facades\File;

class UploadProfileController extends Controller
{
    public function index(){
        
    }

    public function store(Request $request){
    	if(File::exists(Auth::user()->email.".jpg")){
    		File::delete(Auth::user()->email.".jpg");
    	}

    	if($request->hasFile('avatar')){
    		$file = $request->file('avatar');
    		$destinationPath = 'images';
    		$file->move($destinationPath,Auth::user()->email.".jpg");	

    		
    		$id = Auth::user()->id;
    		$user = User::find($id);
    		$user->profile = Auth::user()->email.".jpg";
    		$user->save();
    	} else {
    		$id = Auth::user()->id;
    		$user = User::find($id);
    		$user->profile = 'avatar.jpg';
    		$user->save();
    	}

        return back();
    }
}
