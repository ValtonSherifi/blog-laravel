<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function services(){

        $data = array(
            'title'=>'Service',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        
        return view('pages.services')->with($data);
    }

    public function welcome(){
        $title = 'Welcome to our blog';
        return view('welcome')->with('title',$title);
    }
}
