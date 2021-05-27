<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comment;

use Auth;

class CommentController extends Controller
{
    public function store(Request $request){
    	Comment::create([
    		'comments' => $request->comment,
    		'user_id' => Auth::user()->id
    	]);

    	return back();
    }
}
