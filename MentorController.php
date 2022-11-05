<?php

namespace App\Http\Controllers;

use App\Models\attendance;
use Illuminate\Http\Request;
use App\Models\mentor;
use App\Models\mark;
use App\Models\issue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MentorController extends Controller
{
    public function login()
    {
        if(session()->has('IsLoggedIn')){
            return redirect('/mentormenu');
        }
        return view('mentor/mentorlogin');
    }

    public function mentorloginstore(Request $request)
    {
        $data = mentor::where('email', $request->email)->where('password', $request->password)->first();

        if($data){
            $user_id = $data->id;
            Session::put('IsLoggedIn', true);
            Session::put('id', $user_id);
            Session::put('Name', $data->email);
            
            if($data->Ismentor == 'Y'){
                Session::put('Ismentor', 'Y');  
            }
            
            return redirect('/mentormenu')->with("Success", "Successfully Login!");
        }
        if(!Session::has('IsLoggedIn')){
            
            return redirect("/mentorlogin")->with('Login details are not valid');
        }

    }
    public function mentorregister(Request $request)
    {   $crud= new mentor;
        $crud->mname = $request->get('mname');
        $crud->password = $request->get('password');
        $crud->email = $request->get('email');
        $crud->mphone = $request->get('mphone');
        $crud->semester = $request->get('semester');
        $crud->year = $request->get('year');
        $crud->save();
        return redirect('/adminmenu');

        
    
    }

    public function mentormenu()
    {
        return view('mentor/mentormenu');
    }

    public function addsubject()
    {
        return view('mentor/addsubject');
    }
    public function uploadmarks()
    {
        return view('mentor/uploadmarks');
    }
    public function uploadmarksstore(Request $request)
    {
        $crud= new mark;
        $crud->year = $request->get('year');
        $crud->semester = $request->get('semester');
        $crud->java = $request->get('s1');
        $crud->c  = $request->get('s2');
        $crud->dsa = $request->get('s3');
        $crud->os = $request->get('s4');
        $crud->st = $request->get('s5');
        $crud->python = $request->get('s6');
        $crud->save();
        return redirect('/mentormenu')->with('{{Marks Uploaded}}');
    }
    public function viewmarks()
    {
        return view('mentor/viewmarks');
    }

    public function viewattendance()
    {
        $crud=attendance::all();
        return view('mentor/viewattendance',compact('crud'));

    }
    public function report()
    {
        return view('mentor/report');
    }
    public function issues()
    {
        $cruds=issue::all();
        return view('mentor/issues',compact('cruds'));
    }

    public function replyissues()
    {
        return view('mentor/replyissues');
    }

}
