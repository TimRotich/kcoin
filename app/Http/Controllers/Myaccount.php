<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Myaccount extends Controller
{
    public function myaccountstr (Request $request)
    {

//        $username = Auth::user()->id;
        $this->validate(request(), [


          //  'username' => $username,
            // 'institution' => 'required',
            // 'experience' => 'required',
            // 'teachingarea' => 'required',
            // 'password' => 'required'
        ]);
       // $class = DB::table('myaccount')->where('course',$request->input('course'))
//            ->where('username',Auth::user()->username)
//            ->first();


            $useraccount= \App\Models\Myaccount::create([
//                'email' => $request->input('email'),
                'uid' => Auth::user()->id,
                'name' => Auth::user()->name,

//                'course' => $request->input('course'),

            ]);

            if($useraccount){

            return back()->with(['success' => 'Your Purchase Account has been created successfully' ]);
      } else{

            return back()->with(['error' => 'Sorry We are unable to create your account' ]);
        }



    }
}
