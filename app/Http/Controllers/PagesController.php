<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'WELCOME TO MY BLOG APP';
        //return view('pages.index', compact('title')); OR
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' =>['web design', 'programming', 'data science']
        );
        return view('pages.services')->with($data);
    }
}
