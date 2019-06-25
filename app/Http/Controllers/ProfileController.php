<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    function showProfile(User $userprofile, Post $post, $id){

    	//Get the user
    	$user = Auth::user();

    	$userprofile = User::find($id);

    	$allUsers = User::where('id', '!=', auth()->id())->get();

    	//get the posts
    	$posts = Post::where('user_id', $id)
    	->get();

        return view('profile.profile', compact('user', 'posts', 'userprofile', 'allUsers'));
    }
}
