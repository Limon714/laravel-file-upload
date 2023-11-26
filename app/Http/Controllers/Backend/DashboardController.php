<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomeModel;
use Illuminate\Http\Request;
use Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        return view('backend.dashboard.list');
    }
    
    public function admin_home(Request $request){
        $data['getrecord'] = HomeModel::all();
        return view('backend.home.list',$data);
    }


    public function admin_home_post(Request $request){
        $insertRecord = new HomeModel;
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->work_experience = trim($request->work_experience);
        $insertRecord->description = trim($request->description);

        if(!empty($request->file('profile'))){
            $file = $request->file('profile');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $insertRecord->profile = $filename;
        }
        $insertRecord->save();
        return redirect()->back()->with('success','Home page update successfully');
    }


    public function admin_about(Request $request){
        return view('backend.home.about');
    }
    public function admin_project(Request $request){
        return view('backend.home.project');
    }
    public function admin_blog(Request $request){
        return view('backend.home.blog');
    }
    public function admin_contact(Request $request){
        return view('backend.home.contact');
    }

}
