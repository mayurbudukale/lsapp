<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title= 'Welcome';
       // return view ('pages.index', compact('title'));
        return view ('pages.index')->with('title', $title);
    }
    
    public function about(){
        $title= 'About';
            return view ('pages.about', compact('title'));
        }

        public function services(){
            $data = array(
                'title' => 'Services',
                "services" => ['Web Design', 'Programming', 'SEO']
            );
            return view ('pages.services')->with($data);
        }
        
        public function login(){
            $title= 'Welcome';
           // return view ('pages.index', compact('title'));
            return view ('pages.login')->with('title', $title);
        }
}
