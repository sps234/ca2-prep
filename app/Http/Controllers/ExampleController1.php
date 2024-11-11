<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\testEmail;


class ExampleController1 extends Controller
{
    //

    public function urlGen( ) {
        $url = route('/');
        return response()->json(['url' => $url]);
    }

    public function showForm(Request $request)
    {
        return view('form');
    }

    public function processForm( Request $request ) {
        $validated = $request->validate(
            [
                'name' => 'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
            );
        return response()->json(['message' => 'Form submitted successfully']);
    }

    public function setCookie( Request $request ) {
        $res = response('Cookie set successfully');
        $res->cookie('name', 'valueOfCookie', 2 );
        return $res;
    }


    public function getCookie( Request $request ) {
        $cookie = $request->cookie('name');
        return response()->json(['cookie' => $cookie]);
    }


    public function sendMail( Request $request ) {
        $to = 'saumyapratap234@gmail.com';
        $sub = 'Test Mail';
        $msg = 'This is a test mail';

        Mail::to( $to )->send( new testEmail( $sub, $msg ) );

        return response()->json(['message' => 'Mail sent successfully']);
    }


    public function upload( Request $request ) {

        $path = $request->file('file')->store('public');

        $filename = explode('/', $path)[1];

        return view( 'display', ['filename' => $filename] );
    }

}
