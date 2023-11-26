<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $data['meta_title']='Contact';
        $data['className']='contact';
        return view('contact',$data);
    }
}
