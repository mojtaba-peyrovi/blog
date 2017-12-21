<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

use Illuminate\Support\Facades\Auth;

class postController extends Controller
{
    public function getDashboard(){
        $posts = Post::orderBy('created_at','desc')->get();
        return view('dashboard',compact('posts'));
    }

    public function postCreatePost(Request $request){
        //validation

        $post = new Post();
        $post->body = $request['body'];
        $request->user()->posts()->save($post);
        return redirect()->route('dashboard');
    }
    public function getDeletePost($post_id){
        $post = Post::where('id',$post_id)->first();
        if (Auth::user() != $post->user) {
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'successfully deleted!']);
    }
}
