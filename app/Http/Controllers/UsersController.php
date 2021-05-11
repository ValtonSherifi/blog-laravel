<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UsersController extends Controller
{
    
    public function index(){

        $users = User::orderBy('name')->paginate(10);
        return view('pages.services')->with('users',$users);
    }

    public function show($id)
    {
        // $post = Post::select('user_id')->where('user_id',$id)->first();
        // return view('posts.profile')->with('posts', $post);
        $user = User::find($id);
        $posts = Post::where('useR_id','=',$user->id)->get();

        return view('posts.profile')->with('posts', $posts);
    }

}
