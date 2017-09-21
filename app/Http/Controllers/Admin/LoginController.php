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
            return redirect('admin/');
        }else{
            return redirect('admin/login')
                ->with('error_tip','账号或密码错误')
                ->with('old_name',$name);
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect('admin/login');
    }


}
