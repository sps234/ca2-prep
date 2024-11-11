<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function login( Request $request ) {

        $user = $request->input('name');
        $request->session()->put( 'user', $user );
        return redirect('profile');
    }

    function logout( Request $request ) {
        $request->session()->pull('user');
        return redirect('login');
    }
}
