<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowController extends Controller
{
    //
    function showFollowers(){
        return view('follower.follower');
    }
}
