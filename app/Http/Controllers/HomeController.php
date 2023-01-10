<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage(){
        //Find User
        $user = User::find(1);
        return view('Welcome', $user);
    }
}
