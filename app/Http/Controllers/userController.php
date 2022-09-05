<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\otpMail;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    public function opt(){
        return view("otp");
    }

    public function sendOTP(Request $req){



        $req->validate([
            "email" => "exists:users"
        ],[
           "email.exists" => "Email address not found!"
        ]);

        $getEmail = User::where("email", $req->email)->first();

        if ($getEmail) {
            $name = $getEmail->name;
            $unique = str_shuffle(123456);
            Mail::to($req->email)->send(new otpMail($name, $unique));
            return "Mail sent....";
        }



        
    }


}
