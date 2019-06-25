<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Processors\PostProcessor;

class SubmitPostController extends Controller
{
 function showSubmitPostPage(){
 	return view('posts.submitPosts');
 }
 function submitPost(Request $request){

 	$user_id = Auth::id();

 	$content = $request->content;

    $processor = new PostProcessor();
    $post = $processor->createPost($content, $user_id);

    return view('profile.profile');
 }
}
