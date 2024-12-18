<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function contactUs(){
    return view('contact_us');
}
public function webcopyRighting(){
    return view('web-copywriting');
}
public function videoAnimation(){
    return view('video-animation');
}
public function logoDesign(){
    return view('logo-design');
}
public function websiteDevelopment(){
    return view('website-development');
}
public function ecommerce(){
    return view('ecommerce');
}
public function webApp(){
    return view('web-app');
}
public function smm(){
    return view('smm');
}
public function seo(){
    return view('seo');
}
public function ourpackages(){
    return view('our-packages');
}
public function about(){
    return view('about');
}
public function privacy(){
    return view('privacy-policy');
}
public function terms(){
    return view('terms-and-conditions');
}
}
