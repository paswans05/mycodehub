<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Session;
class Adminpanel extends Controller
{
    //ADMINPANEL LOGIN 
    public function login(){
        return view('admin.adminlogin');
    }
    public function postlogin(Request $req){
       $req->validate([
           'email'=>'required',
           'password'=>'required'
       ]);
       $email=$req->email;
       $password=sha1($req->password);
       $data=admin::where(['email'=>$email,'password'=>$password])->get();
       if (count($data)>0) {
           Session::put('uid',$email);
           return redirect('/admin/dashboard');
       }
       else {
           return redirect('/admin')->with('errMsg','Email or Password is Not correct');
       }
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function logout(){
        Session::flush('uid');
        return redirect('/admin');
    }
}
