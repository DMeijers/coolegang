<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    function showProfile(Post $post, $id){

    	//Get the user
    	$user = Auth::user();

    	$post = Post::where('id', $id)
    	->first();

        return view('profile.profile', compact('user'));
    }
}
