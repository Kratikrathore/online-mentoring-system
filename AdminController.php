<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\attendance;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{/*public function login()
    {
    return view('admin/adminlogin');
}



   
    
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     
    public function loginstore(Request $request)
    {
       $admin = admin::all();
        $admin->email == $request->email;
        $admin->password == $request->password;
 
 
        $admin->save();
 
      
        return redirect("/adminmenu");
    }

     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if(session()->has('IsLoggedIn')){
            return redirect('/adminmenu');
        }
        return view('admin/adminlogin');
    }

    public function loginstore(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required']);
        $data = admin::where('email', $request->email)->where('password', $request->password)->first();

        if($data){
            $user_id = $data->id;
            Session::put('IsLoggedIn', true);
            Session::put('id', $user_id);
            Session::put('Name', $data->email);
            
            if($data->IsAdmin == 'Y'){
                Session::put('IsAdmin', 'Y');  
            }
            
            return redirect('/adminmenu')->with("Success", "Successfully Login!");
        }
        if(!Session::has('IsLoggedIn')){
            
            return redirect("/adminlogin")->with('Login details are not valid');
        }

    }

    

    public function adminmenu()
    {
        return view('admin/adminmenu');
    }

    public function addmentor()
    {
        return view('admin/addmentor');
    }
    public function addstudent()
    {
        return view('admin/addstudent');
    }
    public function uploadattendance()
    {
        return view('admin/uploadattendance');
    }

    public function uploadattendancestore(Request $request)
    {
        $crud= new attendance;
        $crud->eno = $request->get('eno');
        $crud->name = $request->get('name');
        $crud->branch = $request->get('branch');
        $crud->date  = $request->get('date');
        $crud->status = $request->get('status');
        $crud->percentage = $request->get('percentage');
        $crud->year = $request->get('year');
        $crud->save();
        return redirect('/adminmenu')->with('{{Attendance Uploaded}}');
    }
        
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
