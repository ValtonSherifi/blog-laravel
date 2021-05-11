<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UsersController;

class PagesController extends Controller
{
    // public function index(){
    //     $title ='Welcome to Laravel!';
    //     return view('pages.index',compact('title'));
    // }

    public function index(){
        $title ='Welcome to Laravel!';
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = "About Us Page";
        return view('pages.about')->with('title', $title);
    }

    

    public function welcome(){
        $title = 'Welcome to our blog';
        return view('welcome')->with('title',$title);
    }
}
