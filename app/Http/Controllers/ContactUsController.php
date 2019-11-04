<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // function index(){
    //         return view('pages._contact');
    // }

    function send(Request $request){
        $this->validate($request,[
            'fname' =>'required',
            'email'=>'required',
            'message'=>'required',
            'subject'=>'required',
        ]);

        $data = array(
            'fname' =>$request->fname,
            'email'=>$request->email,
            'message'=>$request->message,
            'subject'=>$request->subject,
        );
            Mail::to($data['email'])->send(new ContactUs($data));
            return back()->with('success','Message Successfully Send!');
    }
}
