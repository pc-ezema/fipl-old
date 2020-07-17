<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    // 
    public function faq(){
        return view("faq");
    }

    public function contactUs(){
        return view("contactus");
    }

    public function aboutUs(){
        return view("about");
    }

    public function gallery(){
        return view("gallery");
    }

    public function ourServices(){
        return view("our-services");
    }

    public function ourTeam(){
        return view("our-team");
    }
}
