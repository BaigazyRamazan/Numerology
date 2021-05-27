<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

use Auth;

class MailController extends Controller
{
    public function send_mail($name,$email){
    	$data = [
    		'name' =>$name
    	];

    	Mail::to($email)->send(new SendMail($data));
    }
}
