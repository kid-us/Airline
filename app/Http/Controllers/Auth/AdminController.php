<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin(){
        return view('Auth.adminLogin');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|min:14',
            'password' => 'required|min:6'
        ]);

        $admin = Admin::where('email', $request['email'])->first();
        if(!$admin) return back()->with('error', "Invalid Email or Password");
        if ($admin->password == $request['password']){
            session()->put('admin_logged', true);
            session(['user' => $admin->username]);
            return redirect('admin/profile');
        }

    }

    public function profile(){
        return view('admin.profile');
    }

    public function logout() {
        session()->remove('user');
        session()->remove('admin_logged');

        return redirect('admin/login');
    }
}
