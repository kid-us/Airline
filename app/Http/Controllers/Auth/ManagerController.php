<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function showLogin(){
        return view('Auth.managerLogin');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|min:14',
            'password' => 'required|min:6'
        ]);
        $manager = Manager::where('email', $request['email'])->first();
        if(!$manager) return back()->with('error', "Invalid Email or Password");
        if ($manager->password == $request['password']){
            session()->put('manager_logged', true);
            session(['user' => $manager->username]);
            return redirect('manager/profile');
        }

    }

    public function profile(){
        return view('manager.profile');
    }

    public function logout() {
        session()->remove('user');
        session()->remove('manager_logged');

        return redirect('manager/login');
    }
}
