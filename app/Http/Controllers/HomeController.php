<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function homePage(){
        //Find User
        $user = User::find(1);
        return view('welcome', ['user' => $user]);
    }
}
