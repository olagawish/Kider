<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "kider";
        return view ('home', compact('title'));
    }
        
        
    public function about(){
        $title = "about";
        return view ('about', compact('title'));
    }
        
    public function classes(){
        $title = "classes";
        return view ('classes', compact('title'));
    }
        
    public function contact(){
        $title = "contact";
        return view ('contact', compact('title'));
    }
        
    public function facilities(){
        $title = "Facilities";
        return view ('facilities', compact('title'));
    }

        
    public function team(){
        $title = "Teachers";
        return view ('team', compact('title'));
    }
        

    public function call(){
        $title = "Become A Teachers";
        return view ('call', compact('title'));
    }
        
    public function appointment(){
        $title = "Appointment";
        return view ('appointment', compact('title'));
    }
        
    public function testimonial(){
        $title = "Testimonial";
        return view ('testimonial', compact('title'));
    }
        public function error(){
            $title = "404 error";
            return view ('error', compact('title'));
        }
}