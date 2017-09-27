<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $redirectTo = 'admin/login';

    //
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout','showLogin');
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }

    public function showLogin(){
        return view('admin.login');
    }

    public function login(AdminLoginPost $request){
        $name = $request->input('name');
        $pwd = $request->input('password');
        if (Auth::guard('admin')->attempt(['name'=>$name,'password'=>$pwd])){
            return success(20102,'admin');
        }else{
            return error(50106);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return success(20000,'admin');
    }


}
