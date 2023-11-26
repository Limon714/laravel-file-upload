<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project(){
        $data['meta_title']= 'Project';
        $data['className']= 'portfolio';
        return view('project',$data);
    }
}
