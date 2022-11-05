<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }


    public function contact()
    {
        return view('contact');
    }

    public function krati()
    {
        return view('kratik');
    
    }
    public function logout() {
        Auth::logout(); // logout user
        Session::flush();
        // Redirect::back();
        //return redirect(URL::previous(''));
        return redirect('/home');
    }
    public function pankaj(Request $request)
    {   $crud= new admin;
        $crud->email = $request->get('email');
        $crud->password = $request->get('password');
        $crud->save();
        return redirect('/home');

        
    
    }
}
