<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Processors\PostProcessor;
use App\Post;

class SubmitPostController extends Controller
{
 function showSubmitPostPage(){
 	$user = Auth::user();
 	return view('posts.submitPosts', compact('user'));
 }
 function submitPost(Request $request){

 	$user_id = Auth::id();

 	$content = $request->content;

    $processor = new PostProcessor();
    $post = $processor->createPost($content, $user_id);

    $user = Auth::user();
    $id = $user->id;

        return redirect()->route('profile', ['id' => $id]);
 }
}
