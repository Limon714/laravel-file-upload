<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $data['meta_title'] ='About';
        $data['className'] ='about';
        return view('about',$data);
    }
}
