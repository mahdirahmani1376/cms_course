<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function index()
    {

    }

    public function contact(){
        $people = ['mahdi','ali','tom','edward'];
        return view('contact',compact('people'));
    }
}
