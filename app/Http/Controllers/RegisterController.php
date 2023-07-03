<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    public function index()
    {
        
        if(!Session::has('user'))
        {
            return view('register');
        }
        
        return redirect('/');
    }

}
