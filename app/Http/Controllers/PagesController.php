<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Project Financial Management Unit";
       // return view('pages.index', compact('title'));
        return view('pages.index')->with('titlez',$title);
    }

    public function contact(){
        return view('pages.contact');
    }
    public function visit(){
        return view('pages.visit');
    }

    public function slider(){
        return view('posts.slideshow');
    }
    public function slider2(){
        return view('posts.slideshow2');
    }
   /* public function services(){
        $data = array(
            'titlea' => 'Serviceszzzz',
            'services' => ['Web Design', 'Photography', 'Web App Dev',"Life Tour"]
        );
        return view('pages.services')->with($data);
    }*/

     public function services(){
        
        return view('pages.services');
    }
}
