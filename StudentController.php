<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\attendance;
use App\Models\mark;
use App\Models\issue;
use App\Models\replyissue;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function login()
    {
        if(session()->has('IsLoggedIn')){
            return redirect('/studentmenu');
        }
        return view('student/studentlogin');
    }
    public function studentregister(Request $request)
    {   $crud= new student;
        $crud->sname = $request->get('sname');
        $crud->password = $request->get('password');
        $crud->email = $request->get('email');
        $crud->sphone = $request->get('sphone');
        $crud->semester = $request->get('semester');
        $crud->assmentor = $request->get('assmentor');
        $crud->eno = $request->get('eno');
        $crud->year = $request->get('year');
        $crud->dob = $request->get('dob');
        $crud->branch = $request->get('branch');
        $crud->pemail = $request->get('pemail');
        $crud->save();
        return redirect('/adminmenu');

        
    
    }

    public function studentloginstore(Request $request)
    {
        $data = student::where('email', $request->email)->where('password', $request->password)->first();

        if($data){
            $user_id = $data->id;
            Session::put('IsLoggedIn', true);
            Session::put('id', $user_id);
            Session::put('Name', $data->email);
            
            if($data->Isstudent == 'Y'){
                Session::put('Isstudent', 'Y');  
            }
            
            return redirect('/studentmenu')->with("Success", "Successfully Login!");
        }
        if(!Session::has('IsLoggedIn')){
            
            return redirect("/studentlogin")->with('Login details are not valid');
        }

    }
    


    public function studentmenu()
    {
        return view('student/studentmenu');
    }

    public function viewmarks()
    {
        $crud=mark::all();
        $cruds=student::all();
        return view('student/viewmarks',compact('crud','cruds'));
        

    }
    public function issuestore(Request $request)
    {
        $crud= new issue;
        $crud->name = $request->get('name');
        $crud->issue = $request->get('issue');
        $crud->save();
        return redirect('/studentmenu');
    }
    public function changepassword()
    {
        return view('student/changepassword');
    }
    public function viewtotalattendance()
    {
        $crud=attendance::all();
        return view('student/viewtotalattendance',compact('crud'));
    }
    public function replyissues()
    {
        $cruds=replyissue::all();
        return view('mentor/issues',compact('cruds'));
    }
    public function sendissues()
    {
        return view('student/sendissues');
    }
    public function show($id)
    {
        //
    }

}